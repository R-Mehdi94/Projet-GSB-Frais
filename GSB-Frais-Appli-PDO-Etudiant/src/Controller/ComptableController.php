<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ComptableController extends AbstractController
{

    public function connecter(): Response{

        return $this->render('comptable/connexionComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]);
        
    }
}
/*$login = $_GET[ 'login' ] ;
$mdp = $_GET[ 'mdp' ] ;*/