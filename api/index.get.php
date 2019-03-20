<?php declare(strict_types=1);

namespace App;

use function Siler\Result\{success};

return function () {
    return success(hello_world_message(), 200);
};
