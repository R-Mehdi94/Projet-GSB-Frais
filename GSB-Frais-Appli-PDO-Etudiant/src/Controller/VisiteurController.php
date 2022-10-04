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

    /*public function accueil(): Response
    {
        return $this->render('visiteur/accueilVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }*/

    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        
        $user = connecterVisiteur($login, $mdp);

        if($user!= null){
            return $this->redirect('/Visiteur/Accueil');
        }
        else{
            return $this->render('visiteur/connexionVisiteur.html.twig', [
                'controller_name' => 'VisiteurController',
            ]);
        }

    }

    

    
}

