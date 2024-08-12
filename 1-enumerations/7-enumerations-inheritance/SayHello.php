<?php

require_once __DIR__ . "/Customer.php";

function sayHello(Customer $customer): string
{
    switch ($customer->getGender()):
        case Gender::Male:
            return "Hello {$customer->getGender()->value}{$customer->getName()}";
        case Gender::Female:
            return "Hello {$customer->getGender()->value}{$customer->getName()}";
        case Gender::Not_Mention:
            return "Hello, btw {$customer->getGender()->value}{$customer->getName()}";
        default:
            return "Hello {$customer->getName()}";
    endswitch;
}

var_dump(sayHello(new Customer("USER-1", "Budi", Gender::from("Mr."))));
var_dump(sayHello(new Customer("USER-2", "Putri", Gender::from("Mrs."))));
var_dump(sayHello(new Customer("USER-3", "Putra", Gender::from("Tobat lu anying "))));
var_dump(sayHello(new Customer("USER-3", "Agung", Gender::tryFrom("Kosong"))));

var_dump(Gender::cases());

var_dump(Gender::Male->sayHello());
var_dump(Gender::Female->sayHello());
var_dump(Gender::Not_Mention->sayHello());

var_dump(Gender::Male->inIndonesia());
var_dump(Gender::Female->inIndonesia());

var_dump(Gender::fromIndonesia("Tuan"));
var_dump(Gender::fromIndonesia("Nyonya"));
// var_dump(Gender::fromIndonesia("Salah"));
