<?php
declare(strict_types=1);

namespace App\Handler;

use App\Message\MyMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class DummyHandler
{
    /** @psalm-suppress UnusedParam */
    public function __invoke(MyMessage $message): void
    {
        // noop
    }

    public function unusedMethod(): void
    {

    }
}
