<?php

declare(strict_types=1);

namespace App\Handler;

use App\Message\MyMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

final class MyHandler
{
    /** @psalm-suppress UnusedParam */
    #[AsMessageHandler]
    public function onMyMessage(MyMessage $message): void
    {
        // noop
    }

    public function unusedMethod(): void {}
}
