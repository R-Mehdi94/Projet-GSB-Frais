<?php
namespace App\Modele;
use PDO;
/* final = constante */
/* static = attribue de classe */ 
   class ConnexionBdd{
        private static $connexion =null;

        private function __construc(){
            self::$connexion = new PDO(
                            'mysql:host=localhost;dbname=gsbFrais' ,
                            'adminGsb' ,
                            'azerty'
            );
        }

        public static function getConnexion(){
            if(self::$connexion==null){
                new ConnexionBdd;
            }
            return self::$connexion;
        }
    }