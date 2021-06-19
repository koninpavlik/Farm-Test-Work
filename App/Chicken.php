<?php

class Chicken extends AnimalAbstract implements CanLayEggsInterface
{
    public function __construct()
    {
        $this->id = uniqid(more_entropy: true);
    }

    public function getEggs(): int
    {
        return rand(0, 1);
    }
}