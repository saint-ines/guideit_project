<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'admin_home')]
    public function index(): Response
    {
        $cities = [
            [
                'name' => 'Paris',
                'description' => 'Ville lumière et romantique.',
                'image' => 'images/paris.jpg',
            ],
            [
                'name' => 'Londres',
                'description' => 'Capitale dynamique de l’Angleterre.',
                'image' => 'images/londres.jpg',
            ],
            [
                'name' => 'Berlin',
                'description' => 'Ville vibrante.',
                'image' => 'images/berlin.jpg',
            ]
        ];

        return $this->render('home/index.html.twig', [
            'cities' => $cities,
        ]);
    }
}
