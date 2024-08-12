<?php

require_once __DIR__ . "/../1-new-in-constructor-parameter/Product.php";
require_once __DIR__ . "/../1-new-in-constructor-parameter/Category.php";

function printProduct(Product $product = new Product("Unknown"))
{
    echo $product->getName() . " " . $product->getCategory()->getName() . PHP_EOL;
}

var_dump(new Product("Laptop"));
var_dump(new Product("Laptop", new Category("1", "Barang Elektronik")));

printProduct();
printProduct(new Product("Laptop"));
printProduct(new Product("Laptop", new Category("1", "Barang Elektronik")));
