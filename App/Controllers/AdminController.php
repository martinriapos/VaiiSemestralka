<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Products;
use App\Models\Reviews;
use App\Models\User;

class AdminController extends AControllerBase
{
    public function index(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        if (isset($_GET['is'], $_GET['id'])) {
            $is = $_GET['is'];
            $id = $_GET['id'];
            $allowedTypes = ['u', 'p', 'r'];
            if (!in_array($is, $allowedTypes)) {
                throw new \Exception("Neplatná hodnota parametra!");
            }
            if ($is === 'u') {
                return $this->html(User::getOne($id));
            } else if ($is === 'p') {
                return $this->html(Products::getOne($id));
            } else {
                return $this->html(Reviews::getOne($id));
            }
        } else {
            throw new \Exception("Chýbajúce parametre!");
        }
    }

    public function addproduct(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $name = htmlspecialchars(($formData['name']));
            $price = filter_var($formData['price'], FILTER_VALIDATE_FLOAT);
            $stock = filter_var($formData['stock'], FILTER_VALIDATE_INT);
            $text = htmlspecialchars(($formData['text']));
            if (!$name || !$price || !$stock || !$text) {
                $data['message'] ='Nesprávné údaje';
                return $this->redirect($this->url("admin.addproducts", [$data['message']]));
            }
            $this->app->getAuth()->addproducts($formData['producturl'], $name, $price, $stock, $text);
        }
        return $this->redirect($this->url("home.index"));
    }

    public function editadmin(): Response
    {
        $formData = $this->app->getRequest()->getPost();

        if ($_GET['is'] == "u") {
            $username = htmlspecialchars(($formData['username']));
            $role = htmlspecialchars(($formData['role']));
            $email = filter_var($formData['email'], FILTER_VALIDATE_EMAIL);
            if (isset($formData['submit']) && $username && $role && $email) {
                $this->app->getAuth()->AdminEditUser($_GET['id'], $username, $role, $email);
            } else {
                throw new \Exception("Nespravne udaje");
            }
        } else if ($_GET['is'] == "p"){
            $name = htmlspecialchars(($formData['name']));
            $price = filter_var($formData['price'], FILTER_VALIDATE_FLOAT);
            $stock = filter_var($formData['stock'], FILTER_VALIDATE_INT);
            $text = htmlspecialchars(($formData['text']));
            if (isset($formData['submit']) && $name && $price && $stock && $text) {
                $this->app->getAuth()->AdminEditProduct($_GET['id'], $formData['producturl'], $name, $price, $stock, $text);
            } else {
                throw new \Exception("Nespravne udaje");
            }
        } else {
            $text = htmlspecialchars(($formData['text']));
            if ($formData['rating'] > 5 || $formData['rating'] < 0) {
                throw new \Exception("nespravny rating");
            }
            $rating = filter_var($formData['rating'], FILTER_VALIDATE_FLOAT);
            if (isset($formData['submit']) && $rating && $text) {
                $this->app->getAuth()->AdminEditReview($_GET['id'], $text, $rating);
            } else {
                throw new \Exception("Nespravne udaje");
            }
        }
        return $this->redirect($this->url("home.index"));
    }

    public function editusers(): Response
    {
        if ($this->app->getRequest()->isAjax()) {
            $data = User::getAll();
            return $this->json($data);
        }

        $data = User::getAll();
        if (!$data) {
            throw new \Exception("Žiadny užívatelia neboli nájdení");
        }
        return $this->html($data);
    }

    public function editproducts(): Response
    {
        $data = Products::getAll();
        if (!$data) {
            throw new \Exception("Žiadne produkty neboli nájdené");
        }
        return $this->html($data);
    }

    public function addproducts(): Response
    {
        $data = Products::getAll();
        if (!$data) {
            throw new \Exception("Žiadne produkty neboli nájdené");
        }
        return $this->html($data);
    }

    public function deleteproduct(): Response
    {
        if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $this->app->getAuth()->deleteProduct($_GET['id']);
        } else {
            throw new \Exception("Neplatné ID produktu");
        }
        return $this->redirect($this->url("home.index"));
    }

    public function reviews(): Response
    {
        $data = Reviews::getAll();
        if (!$data) {
            throw new \Exception("Žiadne recenzie neboli nájdené");
        }
        return $this->html($data);
    }

    public function deletereview(): Response
    {
        if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
            $this->app->getAuth()->deleteReview($_GET['id']);
        } else {
            throw new \Exception("Neplatné ID recenzii");
        }
        return $this->redirect($this->url("admin.reviews"));
    }

    public function editreview(): Response
    {
        $data = Reviews::getAll();
        if (!$data) {
            throw new \Exception("Žiadne recenzie neboli nájdené");
        }
        return $this->html($data);
    }
}
