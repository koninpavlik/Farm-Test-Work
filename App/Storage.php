<?php
class Storage
{
    private $milk;
    private $eggs;

    public function addMilk($count): void
    {
        $this->milk += $count;
    }

    public function addEggs($count): void
    {
        $this->eggs += $count;
    }

    public function getInfoCli(): string
    {
        return "Яиц собрано: \e[32m{$this->eggs} шт.\e[0m \nМолока собрано: \e[32m{$this->milk} л.\e[0m";
    }

    public function getInfo(): string
    {
        return "Яиц собрано: {$this->eggs} шт. <br/>Молока собрано: {$this->milk} л.";
    }
}