<?php
    echo (
        "----------------------------------------------------------------------------------" . "\n" .
        "-Bienvenue dans votre menu de compte bancaire! Veuillez sélectionner une option:---" . "\n" .
        "----------------------------------------------------------------------------------" . "\n"
    );
    echo "1. Compte Courant\n";
    echo "2. Livret A\n";
    echo "3. Compte Épargne Logement\n";
    $choix = readline("Entrez votre choix: ");
    switch($choix) {
        case 1:
            echo "Vous avez sélectionné l'option Compte Courant.\n";
            break;
        case 2:
            echo "Vous avez sélectionné l'option Livret A.\n";
            break;
        case 3:
            echo "Vous avez sélectionné l'option Compte Épargne Logement.\n";
            break;
        default:
            echo "Choix invalide. Veuillez réessayer.\n";
    }
?>
