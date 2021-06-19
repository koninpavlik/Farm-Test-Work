<?php


class Barn
{
    private array $animals = [];
    public Storage $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function addAnimal(AnimalAbstract $animal): void
    {
        $this->animals[] = $animal;
    }

    public function collectProducts(int $days): Storage
    {
        $tempStorage = new Storage();
        for ($i = 0; $i < $days; $i ++) {
            foreach ($this->animals as $animal) {
                $productName = $animal::$productName;
                $productCount = $animal->getProduct();

                $tempStorage->addProduct($productName, $productCount);
                $this->storage->addProduct($productName, $productCount);
            }
        }
        return $tempStorage;
    }
}