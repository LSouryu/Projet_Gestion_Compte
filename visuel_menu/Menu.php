<?php

$choix = 0;
$i = 0 ;

function change_color($color)
{
    // Set up shell colors
    $foreground_colors = [
        'black' => '0;30',
        'dark_gray' => '1;30',
        'blue' => '0;34',
        'light_blue' => '1;34',
        'green' => '0;32',
        'light_green' => '1;32', // AINSI
        'cyan' => '0;36',
        'light_cyan' => '1;36',
        'red' => '0;31',
        'light_red' => '1;31',
        'purple' => '0;35',
        'light_purple' => '1;35',
        'brown' => '0;33',
        'yellow' => '1;33',
        'light_gray' => '0;37',
        'white' => '1;37'
    ];
    $couleur = "\033[0m";
    foreach ($foreground_colors as $cle => $en_cours) {
        if (strtolower($color) == $cle) {
            $couleur = "\033[" . $en_cours . "m";
            break;
        }
    }
    echo ($couleur);
}

while ($i === 0) {
    change_color("blue");
    echo (
        "----------------------------------------------------------------------------------" . "\n" .
        "-----------------------Bienvenue dans le menu Gestion Banque----------------------" . "\n" .
        "----------------------------------------------------------------------------------" . "\n"
    );
    change_color("purple");
    echo (
        "1. Créer une Agence" . "\n" . 
        "2. Créer un Client" . "\n" .
        "3. Créer un Compte Bancaire" . "\n" . 
        "4. Recherche de Compte (Numero de Compte)" . "\n" . 
        "5. Recherche de Client (Nom, Numero de Compte, Identifiant de Client)" . "\n" . 
        "6. Afficher la liste des comptes d'un Client (Identifiant Client)" . "\n" . 
        "7. Imprimer les info Client (Identifiant Client)" . "\n" . 
        "8. Simuler frais de gestion" . "\n"
    );
    change_color("blue");
    echo ("----------------------------------------------------------------------------------" . "\n");
    change_color("red");
    echo ("9. Quitter le programe" . "\n");
    change_color("blue");
    echo ("----------------------------------------------------------------------------------" . "\n");
    change_color("purple");
    $choix = intval(readline("choisisser votre option (1-9) : "));
    change_color("blue");
    echo ("----------------------------------------------------------------------------------" . "\n");
    change_color("yellow");
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