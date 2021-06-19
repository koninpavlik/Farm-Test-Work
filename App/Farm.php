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

    public function totalAmountProductions(bool $isCli): string
    {
        if ($isCli) {
            return $this->storage->getInfoCli();
        } else {
            return $this->storage->getInfo();
        }
    }

    public function addAnimals(string $animal, int $count): void
    {
        $this->barn->addAnimals($animal, $count);
    }

    public function collectProducts(): void
    {
        $this->barn->collectProducts();
    }
}