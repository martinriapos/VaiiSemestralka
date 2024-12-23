<?php

namespace App\Auth;

use App\Core\IAuthenticator;
use App\Models\User;

/**
 * Class DummyAuthenticator
 * Basic implementation of user authentication
 * @package App\Auth
 */
class DummyAuthenticator implements IAuthenticator
{

    /**
     * DummyAuthenticator constructor
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Verify, if the user is in DB and has his password is correct
     * @param $login
     * @param $password
     * @return bool
     * @throws \Exception
     */
    public function login($login, $password): bool
    {
        $users = User::getAll();
        foreach ($users as $user) {
            if ( $user->getUsername() == $login && $user->getPassword() == $password ) {
                $_SESSION['user'] = $user->getId();
                return true;
            }
        }
        return false;
    }

    /**
     * Logout the user
     */
    public function logout(): void
    {
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
            session_destroy();
        }
    }

    /**
     * Get the name of the logged-in user
     * @return string
     * @throws \Exception
     */
    public function getLoggedUserName(): string
    {
        return User::getOne($this->getLoggedUserId())->getUsername();
    }

    /**
     * Get the context of the logged-in user
     * @return string
     */
    public function getLoggedUserContext(): mixed
    {
        return null;
    }

    /**
     * Return if the user is authenticated or not
     * @return bool
     */
    public function isLogged(): bool
    {
        return isset($_SESSION['user']) && $_SESSION['user'] != null;
    }

    /**
     * Return the id of the logged-in user
     * @return mixed
     */
    public function getLoggedUserId(): mixed
    {
        return $_SESSION['user'];
    }

    public function registration(mixed $username, mixed $password, mixed $email): void
    {
        $user = new User();
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setEmail($email);
        $user->save();
        $_SESSION['user'] = $user;

    }

    public function deleteUser(): void
    {
        $user = User::getOne($this->getLoggedUserId());
        $this->logout();
        $user->delete();
    }

    public function editUser(mixed $username, mixed $password, mixed $email): void
    {
        $user = User::getOne($this->getLoggedUserId());
        $user->setUsername($username);
        $user->setPassword($password);
        $user->setEmail($email);
        $user->save();
    }
}
