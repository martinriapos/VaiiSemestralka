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
class HomeController extends AControllerBase
{
    /**
     * Authorize controller actions
     * @param $action
     * @return bool
     */
    public function authorize($action)
    {
        return true;
    }

    /**
     * Example of an action (authorization needed)
     * @return \App\Core\Responses\Response|\App\Core\Responses\ViewResponse
     */
    public function index(): Response
    {

        $data = Products::getAll();
        return $this->html($data);
    }

    /**
     * Example of an action accessible without authorization
     * @return \App\Core\Responses\ViewResponse
     */
    public function contact(): Response
    {
        return $this->html();
    }

    public function registration(): Response
    {
        return $this->html();
    }

    public function edit(): Response
    {
        if ($this->app->getAuth()->isLogged()) {
            return $this->html();
        } else {
            return $this->redirect($this->url("auth.login"));
        }
    }
}
