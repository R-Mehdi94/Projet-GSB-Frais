<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\connexionUtilisateur;


class VisiteurController extends AbstractController
{
    public function connexion(): Response
    {
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }


    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        $user = connecterVisiteur($login, $mdp);

        if($user!= null){
            return $this->redirect('./Accueil');
            session_start();
        }
        else{
            return $this->redirect('./Connexion');
        }

    }

    public function accueil(): Response
    {
        return $this->render('visiteur/accueilVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    public function ficheFrais(): Response
    {
        return $this->render('visiteur/ficheFraisVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    

    
}

