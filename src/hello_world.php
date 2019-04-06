<?php declare(strict_types=1);

namespace App;

function hello_world_message(): string
{
    return Store::getState()->getHelloWorld()->getMessage();
}
