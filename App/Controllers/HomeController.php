<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Products;
use App\Models\User;

class HomeController extends AControllerBase
{
    public function index(): Response
    {
        $data = Products::getAll();
        return $this->html($data);
    }

    public function delete(): Response
    {
        $this->app->getAuth()->deleteUser();
        return $this->redirect($this->url("home.index"));
    }

    public function edit(): Response
    {
        return $this->html();
    }

    public function registration(): Response
    {
        return $this->html();
    }

    public function contact(): Response
    {
        return $this->html();
    }

}
