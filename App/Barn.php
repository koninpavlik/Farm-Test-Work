<?php


class Barn
{
    private array $animals = [];
    public Storage $storage;

    /*
     * Теряется ли читабельность при использовании Constructor Property Promotion в таком случае?
     * Моё мнение, что да, поэтому здесь использую инциализацию свойств по старинке, но можно было бы и так:
     * public function __construct(public Storage $storage)
     */
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    private function addChicken(): void
    {
        $this->animals[] = new Chicken();
    }

    public function addChickens(int $count): void
    {
        for ($i = 0; $i < $count; ++$i) {
            $this->addChicken();
        }
    }

    private function addCow(): void
    {
        $this->animals[] = new Cow();
    }

    public function addCows(int $count): void
    {
        for ($i = 0; $i < $count; ++$i) {
            $this->addCow();
        }
    }

    public function addAnimals(string $animal, int $count): void
    {
        switch ($animal) {
            case Cow::class:
                $this->addCows($count);
                break;

            case Chicken::class:
                $this->addChickens($count);
                break;
        }
    }

    public function collectProducts(): void
    {
        foreach ($this->animals as $animal) {
            switch (get_class($animal)) {
                case Cow::class:
                    $this->storage->addMilk($animal->getMilk());
                    break;

                case Chicken::class:
                    $this->storage->addEggs($animal->getEggs());
                    break;
            }
        }
    }
}