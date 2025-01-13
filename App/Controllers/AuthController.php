<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;

/**
 * Class AuthController
 * Controller for authentication actions
 * @package App\Controllers
 */
class AuthController extends AControllerBase
{
    /**
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->redirect(Configuration::LOGIN_URL);
    }

    /**
     * Login a user
     * @return Response
     */
    public function login(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        $logged = null;
        if (isset($formData['submit'])) {
            $logged = $this->app->getAuth()->login($formData['login'], $formData['password']);
            if ($logged) {
                $_SESSION['user'] = $this->app->getAuth()->getLoggedUserId();
                return $this->redirect($this->url("home.index"));

            }
        }

        $data = ($logged === false ? ['message' => 'Zlý login alebo heslo!'] : []);
        return $this->html($data);
    }

    /**
     * Logout a user
     * @return ViewResponse
     */
    public function logout(): Response
    {
        $this->app->getAuth()->logout();
        return $this->redirect($this->url('home.index'));
    }

    public function registration(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $this->app->getAuth()->registration($formData['username'], $formData['password'], $formData['email']);
        }
        return $this->redirect($this->url("auth.login"));
    }

    public function delete(): Response
    {
        $this->app->getAuth()->deleteUser();
        return $this->redirect($this->url("home.index"));
    }

    public function deleteproduct(): Response
    {

        $this->app->getAuth()->deleteProduct($_GET['id']);
        return $this->redirect($this->url("home.index"));
    }

    public function edit(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $this->app->getAuth()->editUser($formData['username'], $formData['password'], $formData['email']);
        }
        return $this->redirect($this->url("home.index"));
    }

    public function editadmin(): Response
    {
        $formData = $this->app->getRequest()->getPost();

        if ($_GET['is'] == "u") {
            if (isset($formData['submit'])) {
                $this->app->getAuth()->AdminEditUser($_GET['id'] ,$formData['username'], $formData['role'], $formData['email']);
            }
        } else {
            if (isset($formData['submit'])) {
                $this->app->getAuth()->AdminEditProduct($_GET['id'] ,$formData['productname'], $formData['name'], $formData['price'], $formData['stock'], $formData['text']);
            }
        }
        return $this->redirect($this->url("home.index"));
    }

    public function addproduct(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $this->app->getAuth()->addproducts($formData['productname'], $formData['name'], $formData['price'], $formData['stock'], $formData['text']);
        }
        return $this->redirect($this->url("home.index"));
    }
}
