<?php

$choix = 0;
$i = 0 ;

while ($i === 0) {
    echo ("----------------------------------------------------------------------------------" . "\n");
    echo ("-----------------------Bienvenue dans le menu Gestion Banque----------------------" . "\n");
    echo ("----------------------------------------------------------------------------------" . "\n");
    echo ("1. Créer une Agence" . "\n");
    echo ("2. Créer un Client" . "\n");
    echo ("3. Créer un Compte Bancaire" . "\n");
    echo ("4. Recherche de Compte (Numero de Compte)" . "\n");
    echo ("5. Recherche de Client (Nom, Numero de Compte, Identifiant de Client)" . "\n");
    echo ("6. Afficher la liste des comptes d'un Client (Identifiant Client)" . "\n");
    echo ("7. Imprimer les info Client (Identifiant Client)" . "\n");
    echo ("8. Simuler frais de gestion" . "\n");
    echo ("----------------------------------------------------------------------------------" . "\n");
    echo ("9. Quitter le programe" . "\n");
    echo ("----------------------------------------------------------------------------------" . "\n");
    $choix = intval(readline("choisisser votre option (1-9) : "));
    echo ("----------------------------------------------------------------------------------" . "\n");
    switch($choix){
        case 1 :
            echo "Choisie option 1";
            $i++;
            break;
        case 2 :
            echo "Choisie option 2";
            $i++;
            break;
        case 3 :
            echo "Choisie option 3";
            $i++;
            break;
        case 4 :
            echo "Choisie option 4";
            $i++;
            break;
        case 5 :
            echo "Choisie option 5";
            $i++;
            break;
        case 6 :
            echo "Choisie option 6";
            $i++;
            break;
        case 7 :
            echo "Choisie option 7";
            $i++;
            break;
        case 8 :
            echo "Choisie option 8";
            $i++;
            break;
        case 9 :
            echo "Choisie option 9";
            $i++;
            break;
        default :
            echo "cette option n'est pas possible" . "\n";
            break;
    }
}