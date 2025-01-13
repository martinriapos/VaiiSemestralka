<?php

namespace App\Models;

use App\Core\Model;
class Products extends \App\Core\Model
{
    protected ?int $id = null;
    protected ?string $name;
    protected ?string $productname;
    protected ?string $price;
    protected ?string $stock;
    protected ?string $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    public function getStock(): ?string
    {
        return $this->stock;
    }

    public function setStock(?string $stock): void
    {
        $this->stock = $stock;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function getProductname(): ?string
    {
        return $this->productname;
    }

    public function setProductname(?string $productname): void
    {
        $this->productname = $productname;
    }

}