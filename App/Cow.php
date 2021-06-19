<?php


class Cow extends AnimalAbstract implements AnimalInterface
{
    public static string $productName = 'Коровье молоко';

    public function __construct()
    {
        $this->id = uniqid(more_entropy: true);
    }

    public function getProduct(): int
    {
        return rand(8, 12);
    }
}