<?php

declare(strict_types=1);

namespace App\Request;

use Symfony\Component\Validator\Constraints as Assert;

final class DummyRequest
{
    public function __construct(public string $foo) {}

    /** @psalm-suppress PossiblyUnusedMethod */
    public function unusedMethod(): string
    {
        return 'I am correctly flagged, as Psalm sees static usage of this class';
    }

    /** @psalm-suppress PossiblyUnusedMethod - false positive - called by validator */
    #[Assert\Callback]
    public function validate(): bool
    {
        return true;
    }
}
