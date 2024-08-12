<?php

require_once __DIR__ . "/1-first-class-callable-syntax/Person.php";

$person = new Person("Davis");

$reference = $person->sayHello(...);

var_dump($reference("Budi"));

// $referenceAgain = str_contains(...);

// $referenceAgain($reference, $reference);

// PHP Fatal error:  Uncaught TypeError: str_contains(): Argument #1 ($haystack) must be of type string, Closure given in /home/arief-karditya/Project-Belajar-In-Linux/Project/php/belajar-php-versi-8.1/3-first-class-callable-syntax/Menggunakan.php:13
// Stack trace:
// #0 /home/arief-karditya/Project-Belajar-In-Linux/Project/php/belajar-php-versi-8.1/3-first-class-callable-syntax/Menggunakan.php(13): str_contains(Object(Closure), Object(Closure))
// #1 {main}
//   thrown in /home/arief-karditya/Project-Belajar-In-Linux/Project/php/belajar-php-versi-8.1/3-first-class-callable-syntax/Menggunakan.php on line 13