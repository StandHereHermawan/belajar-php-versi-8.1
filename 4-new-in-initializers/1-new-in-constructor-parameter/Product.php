<?php

require_once __DIR__ . '/Category.php';

class Product
{
    public function __construct(
        private string $name,
        private Category $category = new Category("0", "Unknown")
    ) {}

    public function getName()
    {
        return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }
}
