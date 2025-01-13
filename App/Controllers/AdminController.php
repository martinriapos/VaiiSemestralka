<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Products;
use App\Models\User;

/**
 * Class HomeController
 * Example class of a controller
 * @package App\Controllers
 */
class AdminController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return $this->app->getAuth()->isLogged();
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {
        return $this->html();
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

    public function addproducts(): Response
    {
        return $this->html();
    }
}
