<?php declare(strict_types=1);

namespace App;

require_once __DIR__ . '/vendor/autoload.php';

use Siler\Monolog as Log;
use Siler\Route;
use Siler\Swoole;
use Swoole\Runtime;
use function Siler\Result\{failure};

State::initialState(new HelloWorld());

Runtime::enableCoroutine();

Log\handler(Log\stream(__DIR__ . '/app.log'));

$handler = function ($request) {
    Log\debug('Request', [$request]);
    $result = Route\files(__DIR__ . '/api') ?? failure('Not found', 404);

    Swoole\json($result, $result->code());
};

Swoole\http($handler)->start();
