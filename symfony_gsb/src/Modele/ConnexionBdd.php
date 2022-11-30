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


        public static function verifInsertFicheFrais($idVisiteur){

            $bd = ConnexionBdd::getConnexion();


            $user = array(':idVisiteur' => $idVisiteur
                        );
                        
            $sql = 'select idVisiteur from FicheFrais WHERE idVisiteur = :idVisiteur';

            $query = $bd->prepare($sql);

            $t = $query->fetchAll();

            return $t;

        }


        public static function insertFicheFrais($idVisiteur) {

            $bd = ConnexionBdd::getConnexion();

            $date = date('m-Y');

            $user = array(':idVisiteur' => $idVisiteur ,
                            ':AnneeMois' => $date
                        );
                        
            $sql = 'insert into FicheFrais(idVisiteur,AnneeMois)' . 'values(:idVisiteur, :AnneeMois)';
            
            
            $query = $bd->prepare($sql);
            
            return $query->execute($user);
        }


        public static function verifMontantETP($montantETP){

            if($montantETP == 0 ){
                return  null;
            }else{
                $libelleETP = "ETP";
                $ETP = array(
                    "montantETP" => $montantETP,
                    "libelleETP" => $libelleETP
                );
                return $ETP;
            }
        }


        public static function verifMontantKM($montantKM){

            if($montantKM == 0 ){
                return  null;
            }else{
                $libelleKM = "KM";
                $KM = array(
                    "montantKM" => $montantKM,
                    "libelleKM" => $libelleKM
                );
                return $KM;
            }
        }


        public static function verifMontantNUI($montantNUI){

            if($montantNUI == 0 ){
                return  null;
            }else{
                $libelleNUI = "NUI";
                $NUI = array(
                    "montantNUI" => $montantNUI,
                    "libelleNUI" => $libelleNUI
                );
                return $NUI;
            }
        }


        public static function verifMontantREP($montantREP){

            if($montantREP == 0 ){
                return  null;
            }else{
                $libelleREP = "REP";
                $REP = array(
                    "montantREP" => $montantREP,
                    "libelleREP" => $libelleREP
                );
                return $REP;
            }
        }


        public static function insertLigneFraisForfait($idVisiteur,$montant,$idFraisForfait){
            
            $bd = ConnexionBdd::getConnexion();

            $date = date('m-Y');

            $user = array(':idVisiteur' => $idVisiteur ,
                            ':AnneeMois' => $date,
                            ':idFraisForfait' => $idFraisForfait,
                            ':quantite' => $montant
                        );
                        
            $sql = 'insert into LigneFraisForfait ' . 'values (:idVisiteur, :AnneeMois, :idFraisForfait, :quantite) ';
            
            
            $query = $bd->prepare($sql);
            
            return $query->execute($user);
        }


        public static function updateLigneFraisForfait($idVisiteur,$montant,$idFraisForfait){
            $bd = ConnexionBdd::getConnexion();

            $date = date('m-Y');

            $user = array(':idFraisForfait'=>$idFraisForfait, ':quantite'=>$montant, ':idVisiteur'=>$idVisiteur, ':date'=>$date);

            $sql = 'update LigneFraisForfait '
            . 'set quantite = :quantite '
            . 'where idFraisForfait = :idFraisForfait '
            . 'and idVisiteur = :idVisiteur '
            . 'and AnneeMois = :date '; 

            $query = $bd->prepare($sql);
            
            return $query->execute($user);
        }

    }