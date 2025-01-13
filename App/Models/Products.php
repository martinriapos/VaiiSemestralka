<?php

namespace App\Models;

use App\Core\Model;
class Products extends \App\Core\Model
{
    protected ?int $id = null;
    protected ?string $name;
    protected ?string $price;
    protected ?string $stock;
    protected ?string $text;

}