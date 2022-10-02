<?php

namespace App\Controller;
require_once("modele/connexionUtilisateur");


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class VisiteurController extends AbstractController
{
    public function connexion(): Response
    {
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function connecter(){

        $login = $_GET[ 'login' ] ;
        $mdp= $_GET[ 'mdp' ] ;
        $user = connecterVisiteur($login, $mdp);

        if($user!= null){
            return "bon";
        }
        else{
            'Pas bon';
        }

    }
}

