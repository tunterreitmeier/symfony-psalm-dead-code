<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
final class IndexController
{
    #[Route('/', name: 'app_index')]
    public function index(): JsonResponse
    {
        return new JsonResponse([]);
    }

    public function unusedMethod(): void {}
}
