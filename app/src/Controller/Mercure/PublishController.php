<?php

namespace App\Controller\Mercure;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;

class PublishController extends AbstractController
{
    /**
     * @Route("/ping", name="ping", methods={"POST"})
     */
    public function publish(HubInterface $hub): Response
    {
        $update = new Update(
            'https://example.com/ping',
            json_encode(['status' => 'OutOfStock'])
        );

        // Publisher's JWT must contain this topic, a URI template it matches or * in mercure.publish or you'll get a 401
        // Subscriber's JWT must contain this topic, a URI template it matches or * in mercure.subscribe to receive the update
        $hub->publish($update);

        return new Response('published!');
    }
}