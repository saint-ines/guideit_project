<?php
// src/Controller/AdminController.php

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
                'name' => 'Londres',
                'description' => 'Capitale dynamique de l’Angleterre, pleine de culture, d’histoire et de modernité.',
                'image' => 'https://source.unsplash.com/400x200/?london'
            ],
            [
                'name' => 'Amsterdam',
                'description' => 'La Venise du Nord avec ses canaux, ses musées et son ambiance unique.',
                'image' => 'https://source.unsplash.com/400x200/?amsterdam'
            ],
            [
                'name' => 'Berlin',
                'description' => 'Ville vibrante, chargée d’histoire et en constante évolution culturelle.',
                'image' => 'https://source.unsplash.com/400x200/?berlin'
            ]
        ];

        return $this->render('home/index.html.twig', [
            'cities' => $cities
        ]);
    }
}
