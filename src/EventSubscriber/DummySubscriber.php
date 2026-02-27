<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;

class DummySubscriber implements EventSubscriberInterface
{
    public function __construct() {}

    public function onControllerEvent(ControllerEvent $event): void {}

    public function onControllerArgumentsEvent(ControllerEvent $event): void {}

    public function onExceptionEvent(ExceptionEvent $event): void {}

    public function alsoOnExceptionEvent(ExceptionEvent $event): void {}

    #[\Override]
    public static function getSubscribedEvents(): array
    {
        return [
            ControllerEvent::class => 'onControllerEvent',
            ControllerArgumentsEvent::class => ['onControllerArgumentsEvent', -100],
            ExceptionEvent::class => [['onExceptionEvent'], ['alsoOnExceptionEvent']],
        ];
    }

    public function unusedMethod(): void {}
}
