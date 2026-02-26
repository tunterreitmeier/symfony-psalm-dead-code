<?php

declare(strict_types=1);

namespace App\Listener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;

final class MyListener
{
    /** @psalm-suppress UnusedParam */
    #[AsEventListener]
    public function onEvent(RequestEvent $event): void
    {
        // noop
    }

    public function unusedMethod(): void {}
}
