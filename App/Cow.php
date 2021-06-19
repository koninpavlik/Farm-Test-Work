<?php


class Cow extends AnimalAbstract implements CanGiveMilkInterface
{
    public function __construct()
    {
        $this->id = uniqid(more_entropy: true);
    }

    public function getMilk(): int
    {
        return rand(8, 12);
    }
}