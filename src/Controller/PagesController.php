<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path:"/", name: "app_")]

final class PagesController extends AbstractController{
    #[Route('/services', name: 'services', methods: ['GET'])]
    public function services(): Response
    {
        return $this->render('pages/services.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    #[Route('/apropos', name: 'about', methods: ['GET'])]
    public function about(): Response
    {
        return $this->render('pages/about.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
    #[Route('/contact', name: 'contact', methods: ['GET', 'POST'])]
    public function contact(): Response
    {
        return $this->render('pages/contact.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
