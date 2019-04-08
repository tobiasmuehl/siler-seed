<?php declare(strict_types=1);

namespace App;

use Siler\Result\Result;
use function Siler\Result\{success};

return function (): Result {
    return success(hello_world_message(), 200);
};
