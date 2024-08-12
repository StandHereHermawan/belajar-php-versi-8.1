<?php

enum Gender: string
{
    case Male = "Mr.";
    case Female = "Mrs.";
    case Not_Mention = "Tobat lu anying ";

    function sayHello()
    {
        return "Hello " . $this->value;
    }

    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya"
        };
    }
}

class Customer
{
    public function __construct(
        private string $id,
        private string $name,
        private ?Gender $gender
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
