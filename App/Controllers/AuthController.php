<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Core\Responses\ViewResponse;

class AuthController extends AControllerBase
{

    public function index(): Response
    {
        return $this->redirect(Configuration::LOGIN_URL);
    }

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

    public function logout(): Response
    {
        $this->app->getAuth()->logout();
        return $this->redirect($this->url('home.index'));
    }


    public function edit(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $this->app->getAuth()->editUser($formData['username'], $formData['password'], $formData['email']);
        }
        return $this->redirect($this->url("home.index"));
    }

    public function registration(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $this->app->getAuth()->registration($formData['username'], $formData['password'], $formData['email']);
        }
        return $this->redirect($this->url("auth.login"));
    }
}
