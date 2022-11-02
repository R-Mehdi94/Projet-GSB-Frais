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



    public function ficheFrais(Request $request): Response
    {
        $ficheFrais = new Fichefrais();

        $ficheFraisForm = $this->createForm(FicheFraisType::class,$ficheFrais);

        $ficheFraisForm->handleRequest($request);

        if($ficheFraisForm->isSubmitted() && $ficheFraisForm->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($ficheFrais);
            $em->flush();

            //return $this->redirect('./HorsForfait');
            return $request;
        }
        return $this->render('visiteur/ficheFraisVisiteur.html.twig', [
            'ficheFraisForm' => $ficheFraisForm->createView(),
        ]);
        
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

    public function fraisHorsForfait(Request $request): Response
    {
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

