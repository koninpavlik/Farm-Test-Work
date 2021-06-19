<?php

class Farm
{
    public Barn $barn;
    public Storage $storage;

    public function __construct()
    {
        $this->storage = new Storage();
        $this->barn = new Barn($this->storage);
    }

    public function totalAmountProductions($isCli): string
    {
        return $this->storage->getInfo($isCli);
    }

    public function addAnimal(AnimalAbstract $animal): void
    {
        $this->barn->addAnimal($animal);
    }

    public function collectProducts(int $days): Storage
    {
        $days = $days >= 1 ? $days : 1;
        return $this->barn->collectProducts($days);
    }
}