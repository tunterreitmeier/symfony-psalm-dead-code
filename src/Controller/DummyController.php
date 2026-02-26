<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\DummyRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

#[Route('/dummy', name: 'dummy')]
class DummyController extends AbstractController
{
    public function __invoke(Request $request, DenormalizerInterface $denormalizer): JsonResponse
    {
        $payload = $denormalizer->denormalize($request->toArray(), DummyRequest::class);

        return $this->json($payload->foo);
    }

    public function unusedMethod(\mysqli $mysqli): void
    {
        $mysqli->close();
    }
}
