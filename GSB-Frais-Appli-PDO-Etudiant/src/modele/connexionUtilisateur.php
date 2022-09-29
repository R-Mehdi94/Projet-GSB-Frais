<?php
namespace App\Controller;

function connecterVisiteur($login, $mdp){
    try {

        $bd = new PDO(
                        'mysql:host=localhost;dbname=gsbFrais' ,
                        'adminGsb' ,
                        'azerty'
        ) ;
        $sql = 'select nom , prenom '
        . 'from Visiteur '
        . 'where login = :login '
        . 'and mdp = :mdp' ;
        
            
        $st = $bd -> prepare( $sql ) ;

        $st -> execute( array( 
                                ':login' => $login ,
                                ':mdp' => $mdp 
                        ) 
                    ) ;
        $resultat = $st -> fetchall() ;
            
        unset( $bd ) ;

        if( count( $resultat ) == 1 ) {
            session_start() ;
            $_SESSION[ 'nom' ] = $resultat[0]['nom'] ;
            $_SESSION[ 'prenom' ] = $resultat[0]['prenom'] ;
            
            $_SESSION[ 'login' ] = $login ;
            
        }

        }

    catch( PDOException $e ){

        die("Erreur : " . $e->getMessage());
        header( 'Location: ../index.php?echec=0' ) ;
    }
} 

function connecterComptable($login, $mdp){
    try {

        $bd = new PDO(
            'mysql:host=localhost;dbname=gsbFrais' ,
            'adminGsb' ,
            'azerty'
        ) ;
        $sql = 'select nom , prenom '
        . 'from Visiteur '
        . 'where login = :login '
        . 'and mdp = :mdp' ;
        
            
    $st = $bd -> prepare( $sql ) ;

    $st -> execute( array( 
                            ':login' => $login ,
                            ':mdp' => $mdp 
                    ) 
                ) ;
    $resultat = $st -> fetchall() ;
        
    unset( $bd ) ;

    if( count( $resultat ) == 1 ) {
        session_start() ;
        $_SESSION[ 'nom' ] = $resultat[0]['nom'] ;
        $_SESSION[ 'prenom' ] = $resultat[0]['prenom'] ;
        
        $_SESSION[ 'login' ] = $login ;
        
        echo'Bienvenue !' ;
    }
    else {
        header( 'Location: ../index.php?echec=1&login=' . $login ) ;
    }
    }

    catch( PDOException $e ){

        die("Erreur : " . $e->getMessage());
        header( 'Location: ../index.php?echec=0' ) ;
    }
} 

       
?>