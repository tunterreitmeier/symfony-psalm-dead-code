<?php

declare(strict_types=1);

namespace App\Container;

final class UnusedFactory
{
    /** Never used */
    public function createDummy(): \mysqli
    {
        return new \mysqli('test');
    }

    public function unsuedOtherMethod(): void {}
}
