<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path:"/", name: "app_")]

final class HomeController extends AbstractController{
    #[Route(['accueil'], name: 'home', methods: ['GET'])]
    public function home(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route(['/'], name: 'index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute(('app_home'));
    }
}