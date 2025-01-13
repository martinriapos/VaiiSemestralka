<?php

namespace App\Models;

use App\Core\Model;

class Orders extends \App\Core\Model
{

    protected ?int $id = null;
    protected ?int $user_id;
    protected ?string $date;
    protected ?string $status;
}