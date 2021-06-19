<?php

class Chicken extends AnimalAbstract implements AnimalInterface
{
    public static string $productName = 'Куриные яйца';

    public function __construct()
    {
        $this->id = uniqid(more_entropy: true);
    }

    public function getProduct(): int
    {
        return rand(0, 1);
    }
}