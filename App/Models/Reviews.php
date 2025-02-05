<?php

namespace App\Models;

use App\Core\Model;
class Reviews extends \App\Core\Model
{
    protected ?int $id = null;
    protected ?int $user_id;
    protected ?int $product_id;
    protected ?string $text;
    protected ?int $rating;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(?int $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }

}