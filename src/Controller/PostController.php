<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('post/home.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
    
    #[Route('/post/{id}', name: 'post_view', methods: ["GET"], requirements: ['id' => '\d+'])]
    public function post(): Response
    {
        return $this->render('post/post.html.twig', [
            'controller_name' => 'PostController',
        ]);
    }
}
