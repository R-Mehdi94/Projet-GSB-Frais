<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Modele\ConnexionBdd;


class ComptableController extends AbstractController
{
    public function connexion(): Response
    {
        $status = session_status();

        if($status == PHP_SESSION_ACTIVE){
            session_destroy();
        }

        return $this->render('comptable/connexionComptable.html.twig', [
            'controller_name' => 'ComptableController',
        ]); 
    }


    public function connecter(): Response{

        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        $comptable = ConnexionBdd::connecterComptable($login, $mdp);

        
        if($comptable !== FALSE){

            $status = session_status();

            if($status == PHP_SESSION_NONE){
                session_start();
                $_SESSION[ "idComptable" ] = $comptable[ "id" ] ;
                $_SESSION[ "nomComptable" ] = $comptable[ "nom" ] ; 
                $_SESSION[ "prenomComptable" ] = $comptable[ "prenom" ] ; 
                
                return $this->redirect('./Accueil');
            }else
            if($status == PHP_SESSION_ACTIVE){
                //Destroy current and start new one
                session_destroy();
                session_start();
                $_SESSION[ "idComptable" ] = $comptable[ "id" ] ;
                $_SESSION[ "nomComptable" ] = $comptable[ "nom" ] ; 
                $_SESSION[ "prenomComptable" ] = $comptable[ "prenom" ] ; 
                
                return $this->redirect('./Accueil');
            }
        }
        else{
            return $this->redirect('./Connexion');
        }
    }


    public function deconnecter(): Response{
        session_start();
        session_destroy() ;
        return $this->redirect('./Connexion');
    }


    public function accueil(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('comptable/accueilComptable.html.twig', [
                'controller_name' => 'ComptableController',
            ]);
        }

        
    }
}
