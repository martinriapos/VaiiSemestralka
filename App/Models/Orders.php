<?php

namespace App\Models;

use App\Core\Model;

class Orders extends \App\Core\Model
{

    protected ?int $id = null;
    protected ?int $user_id;
    protected ?string $order_date;
    protected ?string $status;

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(?int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getDate(): ?string
    {
        return $this->order_date;
    }

    public function setDate(?string $date): void
    {
        $this->order_date = $date;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }
}