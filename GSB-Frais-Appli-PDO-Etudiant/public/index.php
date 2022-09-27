<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

$url = '';
if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

if($url== ''){
        require '/GSB-Frais-Appli-PDO-Etudiant/templates/accueil/index.html';
    }