<?php
declare(strict_types=1);

namespace App\Controller\Request;

final class DummyRequest
{
    public function __construct(public string $foo)
    {

    }

    /** @psalm-suppress PossiblyUnusedMethod */
    public function unusedMethod(): string
    {
        return 'I am correctly flagged, as Psalm sees static usage of this class';
    }
}
