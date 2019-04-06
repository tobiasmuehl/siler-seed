<?php declare(strict_types=1);

namespace App;

use Exception;

final class Store
{
    private $helloWorld;

    public function getHelloWorld(): HelloWorld
    {
        return $this->helloWorld;
    }

    private static $state;

    public static function initialState(HelloWorld $helloWorld): self
    {
        static::$state = new self();
        static::$state->helloWorld = $helloWorld;
        return static::$state;
    }

    public static function getState(): self
    {
        if (is_null(static::$state)) {
            throw new Exception('Store not initialized');
        }

        return static::$state;
    }

    private function __construct()
    {
    }
}
