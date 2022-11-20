<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Modele\ConnexionBdd;
use App\Entity\Fichefrais;
use App\Form\FicheFraisType;
use App\Entity\Fraisforfait;
use App\Form\FraisForfaitType;
use App\Entity\Lignefraishorsforfait;
use App\Form\LigneFraisHorsForfaitType;


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
        $user = ConnexionBdd::connecterVisiteur($login, $mdp);

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

    public function deconnecter(): Response{
        session_start();
        session_destroy() ;
        return $this->redirect('./Connexion');
    }



    public function accueil(): Response
    {
        session_start();
        return $this->render('visiteur/accueilVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }



    public function ficheFraisVue(): Response
    {

        return $this->render('visiteur/ficheFraisVisiteur.html.twig', [
            'ficheFraisForm' => 'fiche',
        ]);
        
    }

    public function ficheFrais(): Response
    {
        $fiche = $_GET['frais'];
        try {
            $montant = $_GET['frais'];
            //$mois = date("m");
        
            $bd = new PDO( 'mysql:host=localhost;dbname=gsbFrais' ,'adminGsb' ,'azerty' ) ;
    
                $sql = 'insert into LigneFraisForfait '
                . 'values (:idVisiteur, :mois, :idFraisForfait, :quantite ';
                
                    
                $st = $bd -> prepare( $sql ) ;
    
                $st -> execute( array( 
                                        ':idVisiteur' => $_SESSION[ "id" ] ,
                                        ':mois' => 1,
                                        ':idFraisForfait' => "ETP",
                                        ':quantite' => $montant
                                ) 
                            ) ;
                unset($bd);

                return $this->redirect('./Accueil');

            }


            catch( PDOException $e ){

                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        }


    /*public function ficheForfait(Request $request): Response
    {
        $ficheForfait = new Fraisforfait();

        $ficheForfaitForm = $this->createForm(FraisForfaitType::class,$ficheForfait);

        $ficheForfaitForm->handleRequest($request);

        if($ficheForfaitForm->isSubmitted() && $ficheForfaitForm->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($ficheForfait);
            $em->flush();

            return $this->redirect('./HorsForfait');
        }
        return $this->render('visiteur/ficheForfaitVisiteur.html.twig', [
            'ficheForfaitForm' => $ficheForfaitForm -> createView(),
        ]);
    }*/

    public function fraisHorsForfait(Request $request, Request $requestTest): Response
    {
        $test = VisiteurController::ficheFrais($requestTest);
        echo $test->request;
        $fraisHorsForfait = new Lignefraishorsforfait();

        $fraisHorsForfaitForm = $this->createForm(LigneFraisHorsForfaitType::class,$fraisHorsForfait);

        $fraisHorsForfaitForm->handleRequest($request);

        if($fraisHorsForfaitForm->isSubmitted() && $fraisHorsForfaitForm->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($fraisHorsForfait);
            $request->request->get('idVisiteur');
            $em->flush();

            return $this->redirect('./Accueil');
            return $request;
        }
        return $this->render('visiteur/fraisHorsForfaitVisiteur.html.twig', [
            'fraisHorsForfaitForm' => $fraisHorsForfaitForm -> createView(),
        ]);
    }
   

    
}

