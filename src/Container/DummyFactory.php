<?php

declare(strict_types=1);

namespace App\Container;

final class DummyFactory
{
    /**
     * Used by container.
     *
     * @see services.yaml
     */
    public function createDummy(): \mysqli
    {
        return new \mysqli('test');
    }

    public function unsuedOtherMethod(): void {}
}
