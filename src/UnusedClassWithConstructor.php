<?php
declare(strict_types=1);

namespace App;

final class UnusedClassWithConstructor
{
    public function __construct() {}
    public function unusedMethod(): void
    {

    }
}
