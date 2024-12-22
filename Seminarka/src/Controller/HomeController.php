<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    // #[Route('/', name: 'index')]
    // public function home(): Response
    // {
    //     return $this->render('index.html.twig', [
    //         'controller_name' => 'HomeController',
    //     ]);
    // }
    

    
}