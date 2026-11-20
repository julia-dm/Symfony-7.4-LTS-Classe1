<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PublicController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $nom="Yuliia";
        return $this->render('public/index.html.twig', [
            'controller_name' => 'PublicController',
            'nom'=>$nom,
            'xss'=>"<script>alert('xss attack');"
        ]);
    }
}
