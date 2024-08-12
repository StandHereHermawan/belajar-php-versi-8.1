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
}
