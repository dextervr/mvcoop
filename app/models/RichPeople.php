<?php

class RichPeople {
    public string $name;
    public string $net;
    public int $age;
    public string $company;

    public function __construct(int $id, string $name, string $color, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
}