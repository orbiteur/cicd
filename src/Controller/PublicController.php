<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PublicController extends AbstractController
{
    #[Route('/public/hello', name: 'public_hello', methods: ['GET'])]
    public function hello(): JsonResponse
    {
        return $this->json([
            'message' => 'Hello 2',
        ]);
    }
}
