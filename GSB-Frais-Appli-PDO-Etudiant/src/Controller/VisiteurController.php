<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class VisiteurController extends AbstractController
{
    public function connecter(): Response
    {
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }
}

/*$login = $_GET[ 'login' ] ;
$mdp = $_GET[ 'mdp' ] ;*/