<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Modele\ConnexionBdd;


class ComptableController extends AbstractController
{
    public function connexion(): Response
    {
        return $this->render('comptable/connexionComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]); 
    }
    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        $user = ConnexionBdd::connecterComptable($login, $mdp);

        
        if($user!= null){

            session_start();

            $_SESSION[ "id" ] = $user[ "id" ] ;
            $_SESSION[ "nom" ] = $user[ "nom" ] ; 
            $_SESSION[ "prenom" ] = $user[ "prenom" ] ; 

            return $this->redirect('./Accueil');
        }
        else{
            return $this->redirect('./Connexion');
        }

    }

    public function accueil(): Response
    {
        return $this->render('comptable/accueilComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]);
    }
}
