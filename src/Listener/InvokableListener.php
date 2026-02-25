<?php
declare(strict_types=1);

namespace App\Listener;

use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;

#[AsEventListener]
final class InvokableListener
{
    /** @psalm-suppress UnusedParam */
    public function __invoke(RequestEvent $event): void
    {
        //noop
    }

    public function unusedMethod(): void
    {

    }
}
