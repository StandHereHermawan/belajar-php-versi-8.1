<?php

require_once __DIR__ . "/../1-enumerations/Customer.php";

function sayHello(Customer $customer): string
{
    switch ($customer->getGender()):
        case Gender::Male:
            return "Hello Mr. {$customer->getName()}";
        case Gender::Female:
            return "Hello Mrs. {$customer->getName()}";
        default:
            return "Hello {$customer->getName()}";
    endswitch;
}

var_dump(sayHello(new Customer("USER-1", "Budi", Gender::Male)));
var_dump(sayHello(new Customer("USER-2", "Putri", Gender::Female)));

var_dump(Gender::cases());
