<?php

require_once __DIR__ . "/HasName.php";
require_once __DIR__ . "/HasBrand.php";

class Car implements HasBrand, HasName
{
    private string $name;
    private string $brand;

    public function __construct() {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setName(string $value)
    {
        $this->name = $value;
    }

    public function setBrand(string $value)
    {
        $this->brand = $value;
    }
}

function printBrandAndName(HasBrand & HasName $value)
{
    echo "{$value->getBrand()} - {$value->getName()}";
}

$avanza = new Car();
$avanza->setName("Avanza");
$avanza->setBrand("Toyota");

printBrandAndName($avanza);
