<?php

trait IndonesiaGender
{
    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya"
        };
    }
}

interface SayHello
{
    function sayHello(): string;
}

enum Gender: string implements SayHello
{
    use IndonesiaGender;

    case Male = "Mr.";
    case Female = "Mrs.";
    case Not_Mention = "Tobat lu anying ";

    const Unknown = "Unknown";

    function sayHello(): string
    {
        return "Hello " . $this->value;
    }

    static function fromIndonesia(string $value): Gender
    {
        return match ($value) {
            "Tuan" => Gender::Male,
            "Nyonya" => Gender::Female,
            default => throw new Exception("Unsupported Value")
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
