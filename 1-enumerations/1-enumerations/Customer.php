<?php

enum Gender
{
    case Male;
    case Female;
    case Not_Mention;
}

class Customer
{
    public function __construct(
        private string $id,
        private string $name,
        private Gender $gender
    ) {}

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }
}
