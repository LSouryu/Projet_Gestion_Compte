<?php

// définir une fonction qui lit une valeur entrée par l'utilisateur
function setting($message)
{
    // afficher le message à l'utilisateur
    echo $message;
    // lire la valeur entrée par l'utilisateur
    $valeur = readline();
    // retourner la valeur comme résultat
    return $valeur;
}
