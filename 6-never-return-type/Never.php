<?php

function stop(): never
{
    echo "Stop" . PHP_EOL;
    exit();
}

stop();

echo "Hello World" . PHP_EOL;
