<?php


class Duck extends AnimalAbstract implements AnimalInterface
{
    public static string $productName = 'Утиные яйца';

    public function __construct()
    {
        $this->id = uniqid(more_entropy: true);
    }

    public function getProduct(): int
    {
        return rand(0, 2);
    }
}