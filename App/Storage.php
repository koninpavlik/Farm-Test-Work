<?php
class Storage
{
    private array $products = [];

    public function addProduct(string $name, int $count): void
    {
        if(!isset($this->products[$name])){
            $this->products[$name] = $count;
        } else {
            $this->products[$name] += $count;
        }
    }

    public function getInfo(bool $isCli): string
    {
        $result = "";
        foreach ($this->products as $key => $value) {
            if ($isCli) {
                $result .= "{$key}: {$value}\n";
            } else {
                $result .= "{$key}: {$value}<br/>";
            }
        }
        return $result;
    }
}