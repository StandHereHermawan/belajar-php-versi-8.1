<?php

class Category
{
    private readonly string $id;
    private readonly string $name;

    public function __construct() {}

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName(string $value)
    {
        if (!isset($this->name)) :
            $this->id = uniqid();
        endif;
        $this->name = $value;
    }
}

$category = new Category();
$category->setName("Abang");
// $category->setName("Abangan");