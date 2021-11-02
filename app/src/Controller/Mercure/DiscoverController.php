<?php

namespace App\Controller\Mercure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mercure\Authorization;
use Symfony\Component\Mercure\Discovery;

class DiscoverController extends AbstractController
{
    public function __invoke(Request $request, Discovery $discovery, Authorization $authorization): JsonResponse
    {
        // Link: <http://localhost:3000/.well-known/mercure>; rel="mercure"
        $discovery->addLink($request);

        $authorization->setCookie($request, ['https://example.com/books/1']);

        return $this->json([
            '@id' => '/books/1',
            'availability' => 'https://schema.org/InStock',
        ]);
    }
}