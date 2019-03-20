<?php declare(strict_types=1);

namespace App;

final class State
{
    public function getMessage(): string
    {
        return 'Hello World';
    }

    private static $instance;

    public static function getInstance(): State
    {
        if (is_null(static::$instance)) {
            static::$instance = new State();
        }

        return static::$instance;
    }
}
