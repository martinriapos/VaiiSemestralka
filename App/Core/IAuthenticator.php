<?php

namespace App\Core;

/**
 * Interface IAuthenticator
 * Interface for authentication
 * @package App\Core
 */
interface IAuthenticator
{
    /**
     * Perform user login
     * @param $login
     * @param $password
     * @return bool
     */
    public function login($login, $password): bool;

    /**
     * Perform user login
     * @return void
     */
    public function logout(): void;

    /**
     * Return name of a logged user
     * @return string
     */
    public function getLoggedUserName(): string;

    /**
     * Return id of a logged user
     * @return mixed
     */
    public function getLoggedUserId(): mixed;

    /**
     * Return a context of logged user, e.g. user class instance
     * @return mixed
     */
    public function getLoggedUserContext(): mixed;

    /**
     * Return, if a user is logged or not
     * @return bool
     */
    public function isLogged(): bool;
    public function isAdmin(): bool;

    public function registration(mixed $username, mixed $password, mixed $email);

    public function deleteUser();

    public function editUser(mixed $username, mixed $password, mixed $email);
    public function AdminEditUser(mixed $userid, mixed $username, mixed $role, mixed $email);

    public function AdminEditProduct(mixed $id, mixed $productname, mixed $name, mixed $price, mixed $stock, mixed $text);

    public function deleteProduct(mixed $id);

    public function addproducts(mixed $productname, mixed $name, mixed $price, mixed $stock, mixed $text);

    public function deleteReview(mixed $id);

    public function addReview(mixed $user_id, mixed $produkt, mixed $hodnotenie, mixed $text);

    public function AdminEditReview(mixed $id, mixed $text, mixed $rating);
}
