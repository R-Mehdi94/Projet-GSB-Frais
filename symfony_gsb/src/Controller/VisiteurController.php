<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Modele\ConnexionBdd;
use PDO;



class VisiteurController extends AbstractController
{
    public function connexion(): Response
    {
        $status = session_status();

        if($status == PHP_SESSION_ACTIVE){
            session_start();
            session_destroy();
        }

        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    //date();

    

    public function connecter(): Response{


        $login = $_POST[ 'login' ] ;
        $mdp= $_POST[ 'mdp' ] ;
        $user = ConnexionBdd::connecterVisiteur($login, $mdp);

        if($user !== FALSE){

            $status = session_status();

            if($status == PHP_SESSION_NONE){
                session_start();
                $_SESSION[ "idVisiteur" ] = $user[ "id" ] ;
                $_SESSION[ "nomVisiteur" ] = $user[ "nom" ] ; 
                $_SESSION[ "prenomVisiteur" ] = $user[ "prenom" ] ; 
                
                return $this->redirect('./Accueil');
            }else
            if($status == PHP_SESSION_ACTIVE){
                //Destroy current and start new one
                session_destroy();
                session_start();
                $_SESSION[ "idVisiteur" ] = $user[ "id" ] ;
                $_SESSION[ "nomVisiteur" ] = $user[ "nom" ] ; 
                $_SESSION[ "prenomVisiteur" ] = $user[ "prenom" ] ; 
                
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
            return $this->render('visiteur/accueilVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
        }
        
    }



    public function ficheFraisVue(): Response
    {
        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{
            return $this->render('visiteur/ficheFraisVisiteur.html.twig', [
                'ficheFraisForm' => 'fiche',
            ]);
        }

    }

    public function ficheFrais():Response
    {

        session_start();

        if($_SESSION == NULL){
            return $this->redirect('./Connexion');
        }else{

            $montantETP = $_GET['fraisETP'];
            $montantKM = $_GET['fraisKM'];
            $montantNUI = $_GET['fraisNUI'];
            $montantREP = $_GET['fraisREP'];
            $idVisiteur = $_SESSION['idVisiteur'];

            $ETP = ConnexionBdd::verifMontantETP($montantETP);
            $KM = ConnexionBdd::verifMontantKM($montantKM);
            $NUI = ConnexionBdd::verifMontantNUI($montantNUI);
            $REP = ConnexionBdd::verifMontantREP($montantREP);

            $test = ConnexionBdd::verifInsertFicheFrais($idVisiteur);
            echo var_dump($test);
            if($test == true){
                $obj = ConnexionBdd::insertFicheFrais($idVisiteur);
            }

            if($ETP != null){

                try {
                    $obj = ConnexionBdd::insertLigneFraisForfait($idVisiteur, $ETP["montantETP"], $ETP["libelleETP"]);
                }
    
                catch( PDOException $e ){
                    echo $e->getMessage();
                }

            }

            if($KM != null){
                try {
                    $obj = ConnexionBdd::insertLigneFraisForfait($idVisiteur, $KM["montantKM"], $KM["libelleKM"]);
                }
    
                catch( PDOException $e ){
                    echo $e->getMessage();
                }

            }

            if($NUI != null){
                try {
                    $obj = ConnexionBdd::insertLigneFraisForfait($idVisiteur, $NUI["montantNUI"], $NUI["libelleNUI"]);
                }
    
                catch( PDOException $e ){
                    echo $e->getMessage();
                }

            }

            if($REP != null){
                try {
                    $obj = ConnexionBdd::insertLigneFraisForfait($idVisiteur, $REP["montantREP"], $REP["libelleREP"]);
                }
    
                catch( PDOException $e ){
                    echo $e->getMessage();
                }

            }

            return $this->redirect('./FicheDeFrais');

        }
    }
   
 
}
