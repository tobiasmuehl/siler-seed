<?php declare(strict_types=1);

namespace App;

function hello_world_message(): string
{
    return State::getInstance()->getMessage();
}
