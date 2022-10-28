<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Modele\ConnexionBdd;
use App\Entity\Fichefrais;
use App\Form\FicheFraisType;


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
        return $this->render('visiteur/connexionVisiteur.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
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
        }
        return $this->renderForm('visiteur/ficheFraisVisiteur.html.twig', [
            'ficheFraisForm' => $ficheFraisForm,
        ]);
    }



   

    
}

