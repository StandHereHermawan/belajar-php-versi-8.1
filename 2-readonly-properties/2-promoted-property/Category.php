<?php

class Category
{
    public function __construct(
        private readonly string $id,
        private readonly string $name
    ) {}

    public function getName()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(string $value)
    {
        $this->id = $value;
    }

    public function setName(string $value)
    {
        if (!isset($this->name)) :
            $this->id = uniqid();
        endif;
        $this->name = $value;
    }
}

$category = new Category(uniqid(), "Abang");
// $category->setName("Abangan");
