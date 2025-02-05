<?php

namespace App\Auth;

use App\Core\IAuthenticator;
use App\Models\Products;
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
            if ( $user->getUsername() == $login && password_verify($password, $user->getPassword()) && $user->getActive() == 1) {
                $_SESSION['userid'] = $user->getId();
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['email'] = $user->getEmail();
                $_SESSION['role'] = $user->getRole();
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
        if (isset($_SESSION['userid'])) {
            unset($_SESSION['userid']);
            unset($_SESSION['email']);
            unset($_SESSION['username']);
            unset($_SESSION['role']);
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
        return isset($_SESSION['userid']) && $_SESSION['userid'] != null;
    }

    /**
     * Return the id of the logged-in user
     * @return mixed
     */
    public function getLoggedUserId(): mixed
    {
        return $_SESSION['userid'];
    }

    public function registration(mixed $username, mixed $password, mixed $email): void
    {
        $user = new User();
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user->setUsername($username);
        $user->setPassword($hashedPassword);
        $user->setEmail($email);
        $user->setActive(1);
        $user->setRole("user");
        $user->save();
    }

    public function deleteUser(): void
    {
        $user = User::getOne($this->getLoggedUserId());
        $user->setActive(0);
        $user->save();
        $this->logout();

    }

    public function deleteProduct(mixed $id)
    {
        $product = Products::getOne($id);
        $product->delete();
    }

    public function editUser(mixed $username, mixed $password, mixed $email): void
    {
        $user = User::getOne($_SESSION['userid']);
        if ($user->getActive() == 1) {
            $hashedpassword = password_hash($password, PASSWORD_BCRYPT);
            $user->setUsername($username);
            $user->setPassword($hashedpassword);
            $user->setEmail($email);
            $user->save();
        }
    }

    public function adminEditUser(mixed $userid, mixed $username, mixed $role, mixed $email): void
    {
        $user = User::getOne($userid);
        if ($user->getActive() == 1) {
            $user->setUsername($username);
            $user->setRole($role);
            $user->setEmail($email);
            $user->save();
        }
    }

    public function isAdmin(): bool
    {
        return isset($_SESSION['role']) && $_SESSION['role'] != 'user';
    }

    public function AdminEditProduct(mixed $id, mixed $producturl, mixed $name, mixed $price, mixed $stock, mixed $text)
    {
        $product = Products::getOne($id);
        $product->setProducturl($producturl);
        $product->setPrice($name);
        $product->setPrice($price);
        $product->setStock($stock);
        $product->setText($text);
        $product->save();
    }

    public function addproducts(mixed $producturl, mixed $name, mixed $price, mixed $stock, mixed $text)
    {

        $product = new Products();
        $product->setProducturl($producturl);
        $product->setName($name);
        $product->setPrice($price);
        $product->setStock($stock);
        $product->setText($text);
        $product->save();
    }
}
