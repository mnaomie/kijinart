<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtGalleryController extends AbstractController
{
    #[Route('/gallery', name: 'art_gallery')]
    public function index(): Response
    {
        return $this->render('art_gallery/index.html.twig', [
            'controller_name' => 'ArtGalleryController',
        ]);
    }
}
