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
        if (!isset($_SESSION['user']) || $_SESSION['user'] <= 0) {
            return $this->redirect(Configuration::LOGIN_URL);
        }
        return $this->redirect($this->url("home.index"));
    }

    public function login(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $login = htmlspecialchars(($formData['login']));
            $password = htmlspecialchars(($formData['password']));
            if (empty($login) || empty($password)) {
                return $this->html(['message' => 'Login a heslo nesmú byť prázdne.']);
            }
            $logged = $this->app->getAuth()->login($login, $password);
            if ($logged) {
                $_SESSION['user'] = $this->app->getAuth()->getLoggedUserId();
                return $this->redirect($this->url("home.index"));
            } else {
                return $this->html(['message' => 'Zlý login alebo heslo!']);
            }
        }
        return $this->html();
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
            $username = htmlspecialchars(($formData['username']));
            $email = filter_var(($formData['email']), FILTER_VALIDATE_EMAIL);
            $password = htmlspecialchars(($formData['password']));
            $confirmPassword = htmlspecialchars(($formData['confirmPassword']));
            if ($password != $confirmPassword) {
                $data['message'] ='Hesla sa nezhodujú';
                return $this->redirect($this->url("home.edit", [$data['message']]));
            }
            if (!$username || !$email) {
                $data['message'] ='Neplatné meno alebo email.';
                return $this->redirect($this->url("home.edit", [$data['message']]));
            }
            if ($password !== "") {
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $data['message'] ='Vyplňte heslo';
                return $this->redirect($this->url("home.edit", [$data['message']]));
            }
            $this->app->getAuth()->editUser($username, $hashedPassword, $email);
        }
        return $this->redirect($this->url("home.index"));
    }

    public function registration(): Response
    {
        $formData = $this->app->getRequest()->getPost();
        if (isset($formData['submit'])) {
            $username = htmlspecialchars(($formData['username']));
            $email = filter_var(($formData['email']), FILTER_VALIDATE_EMAIL);
            $password = htmlspecialchars(($formData['password']));
            $confirmPassword = htmlspecialchars(($formData['confirmPassword']));
            if ($password !== $confirmPassword) {
                $data['message'] ='Hesla sa nezhodujú';
                return $this->redirect($this->url("home.registration", [$data['message']]));
            }
            if (!$username || !$email || !$password || !$confirmPassword) {
                $data['message'] ='Nespravne udaje';
                return $this->redirect($this->url("home.registration", [$data['message']]));
            }
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $this->app->getAuth()->registration($username, $hashedPassword, $email);
        }
        return $this->redirect($this->url("auth.login"));
    }
}
