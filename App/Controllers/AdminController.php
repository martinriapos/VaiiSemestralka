<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Products;
use App\Models\User;

class AdminController extends AControllerBase
{
    public function index(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        if ($_GET['is'] == "u") {
            $id = $_GET['id'];
            return $this->html(User::getOne($id));
        } else {
            $id = $_GET['id'];
            return $this->html(Products::getOne($id));
        }
    }

    public function addproduct(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $this->app->getAuth()->addproducts($formData['productname'], $formData['name'], $formData['price'], $formData['stock'], $formData['text']);
        }
        return $this->redirect($this->url("home.index"));
    }

    public function editadmin(): Response
    {
        $formData = $this->app->getRequest()->getPost();

        if ($_GET['is'] == "u") {
            if (isset($formData['submit'])) {
                $this->app->getAuth()->AdminEditUser($_GET['id'], $formData['username'], $formData['role'], $formData['email']);
            }
        } else {
            if (isset($formData['submit'])) {
                $this->app->getAuth()->AdminEditProduct($_GET['id'], $formData['productname'], $formData['name'], $formData['price'], $formData['stock'], $formData['text']);
            }
        }
        return $this->redirect($this->url("home.index"));
    }

    public function editusers(): Response
    {
        $data = User::getAll();
        return $this->html($data);
    }

    public function editproducts(): Response
    {
        $data = Products::getAll();
        return $this->html($data);
    }

    public function addproducts(): Response
    {
        return $this->html();
    }

    public function deleteproduct(): Response
    {
        $this->app->getAuth()->deleteProduct($_GET['id']);
        return $this->redirect($this->url("home.index"));
    }
}
