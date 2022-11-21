<?php
namespace App\Modele;
use PDO;
/* final = constante */
/* static = attribue de classe */ 
   class ConnexionBdd{

    private static $connexion = null ;
	
    private function __construct(){
        self::$connexion = new PDO( 'mysql:host=localhost;dbname=gsbFrais' ,'adminGsb' ,'azerty' ) ;
    }

    private static function getConnexion(){
        if( self::$connexion == null ){
            new ConnexionBdd() ;
        }
        return self::$connexion ;
    }

       public static function connecterVisiteur($login, $mdp){
            try {
        
                $bd = ConnexionBdd::getConnexion();
        
                    $sql = 'select id, nom , prenom '
                    . 'from Visiteur '
                    . 'where login = :login '
                    . 'and mdp = :mdp' ;
                    
                        
                    $st = $bd -> prepare( $sql ) ;
        
                    $st -> execute( array( 
                                            ':login' => $login ,
                                            ':mdp' => $mdp 
                                    ) 
                                ) ;
                    $resultat = $st -> fetch(PDO::FETCH_ASSOC) ;

                    $st->closeCursor() ;
                    return $resultat;

        
                }

                catch( PDOException $e ){

                    die("Erreur : " . $e->getMessage());
                    header( 'Location: ../index.php?echec=0' ) ;
                }
         }

        public static function connecterComptable($login, $mdp){
            try {
                     
                $bd = ConnexionBdd::getConnexion();
        
                $sql = 'select id ,nom , prenom '
                . 'from Comptable '
                . 'where login = :login '
                . 'and mdp = :mdp' ;
                
                    
            $st = $bd -> prepare( $sql ) ;
        
            $st -> execute( array( 
                                    ':login' => $login ,
                                    ':mdp' => $mdp 
                            ) 
                        ) ;
            $resultat = $st -> fetch(PDO::FETCH_ASSOC) ;

            $st->closeCursor() ;
            return $resultat;
            }
        
            catch( PDOException $e ){
        
                die("Erreur : " . $e->getMessage());
                header( 'Location: ../index.php?echec=0' ) ;
            }
        } 


        public static function insertFicheFrais($idVisiteur) {

            $bd = ConnexionBdd::getConnexion();

            $user = array(':idVisiteur' => $idVisiteur ,
                          ':mois' => "1"
                        );
                        
            $sql = 'insert into FicheFrais(idVisiteur,mois)' . 'values(:idVisiteur, :mois)';
            
         
            $query = $bd->prepare($sql);
         
            return $query->execute($user);
        }


        public static function insertLigneFraisForfait($idVisiteur,$montant) {
           
            $bd = ConnexionBdd::getConnexion();


            $user = array(':idVisiteur' => $idVisiteur ,
                          ':mois' => "1",
                          ':idFraisForfait' => "ETP",
                          ':quantite' => $montant
                        );
                        
            $sql = 'insert into LigneFraisForfait ' . 'values (:idVisiteur, :mois, :idFraisForfait, :quantite) ';
            
         
            $query = $bd->prepare($sql);
         
            return $query->execute($user);
        }

    }