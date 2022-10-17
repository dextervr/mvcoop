<?php

class Fruit {
    public int $id;
    public string $name;
    public string $color;
    public float $price;

    public function __construct(int $id, string $name, string $color, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
}