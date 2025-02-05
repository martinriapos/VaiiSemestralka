<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Core\Responses\Response;
use App\Models\Orderproducts;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use mysql_xdevapi\Exception;

class HomeController extends AControllerBase
{
    public function index(): Response
    {
        $data = Products::getAll();
        return $this->html($data);
    }

    public function delete(): Response
    {
        if (isset($_SESSION['userid']) && $_SESSION['userid'] > 0) {
            $this->app->getAuth()->deleteUser();
        } else {
            throw new \Exception("Nemáte oprávnenie na túto akciu.");
        }
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

    public function orders(): Response
    {
        if (!isset($_SESSION['userid']) || $_SESSION['userid'] <= 0) {
            throw new \Exception("Pre zobrazenie objednávok sa musíte prihlásiť.");
        }
        $user = $_SESSION['userid'];
        $data = Orders::getAll('user_id = ?', [$user]);
        if (!$data) {
            throw new \Exception("Žiadne objednávky neboli nájdené.");
        }
        return $this->html($data);
    }

    public function ordersinfo(): Response
    {
        $orderid = $_GET['id'];
        if (!isset($_SESSION['userid']) || $_SESSION['userid'] <= 0) {
            throw new \Exception("Pre zobrazenie informácií o objednávke sa musíte prihlásiť.");
        }
        $data = Orderproducts::getAll('order_id = ?', [$orderid]);
        if (!$data) {
            throw new \Exception("Informácie o objednávke neboli nájdené..");
        }
        return $this->html($data);
    }
}
