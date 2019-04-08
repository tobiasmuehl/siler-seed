<?php declare(strict_types=1);

namespace App;

$base_path = realpath(__DIR__ . '/../..');
require_once $base_path . '/vendor/autoload.php';

use Siler\Monolog as Log;
use Siler\Route;
use Siler\Swoole;
use Swoole\Runtime;
use function Siler\Result\{failure};

Store::initialState(new HelloWorld());
Runtime::enableCoroutine();

Log\handler(Log\stream($base_path . '/log/http.log'));

$handler = function ($request) use ($base_path) {
    Log\debug('Request', [$request]);
    $result = Route\files($base_path . '/app/http/endpoints') ?? failure('Not found', 404);

    Swoole\json($result, $result->code());
};

Swoole\http($handler)->start();
