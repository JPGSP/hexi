<?php

namespace App\Infrastructure\Symfony\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Hola, esta es mi página');
    }
}