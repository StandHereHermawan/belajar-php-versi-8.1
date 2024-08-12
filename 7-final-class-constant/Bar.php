<?php

require_once __DIR__. "/Foo.php";

class Bar extends Foo
{
    final const XX = "Foo";
}

class FooBar extends Bar
{

}

class BarFoo extends Bar
{
    // final const XX = "Foo"; error
}

var_dump(Bar::XX);
var_dump(FooBar::XX);
var_dump(BarFoo::XX);