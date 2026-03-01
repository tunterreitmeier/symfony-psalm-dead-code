<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\DummyRequest;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\Service\Attribute\Required;

#[Route('/dummy', name: 'dummy')]
class DummyController extends AbstractController
{
    private LoggerInterface $logger;

    public function __invoke(Request $request, DenormalizerInterface $denormalizer): JsonResponse
    {
        $payload = $denormalizer->denormalize($request->toArray(), DummyRequest::class);

        $this->logger->debug('debug');

        return $this->json($payload->foo);
    }

    #[Required]
    public function setService(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    public function unusedMethod(\mysqli $mysqli): void
    {
        $mysqli->close();
    }
}
