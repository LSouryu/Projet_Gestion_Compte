<?php

// inclure le fichier lirevaleur.php qui contient la fonction setting
include "lirevaleur.php";

class BankAccount{
    private $solde;
    private $numerocompte;
    private $nomTitulaire;
    private $typeCompte;

    public function __construct($solde, $numerocompte, $nomTitulaire, $typeCompte) {
        $this-> solde =$solde ;
        $this-> numerocompte=$numerocompte;
        $this-> nomTitulaire=$nomTitulaire;
        $this-> typeCompte=$typeCompte;
    
        
}

    public function depot($montant){
        if($montant>0){
        $this->solde+=$montant;
        return "Déposé:$". number_format($montant,2)."\n";
    }else{
        return "montant invalide\n";

    }
}

public function retrait($montant){
    if ($montant > 0 && $montant <=$this-> solde){
        $this->solde-=$montant;
        return"retiré:$" .number_format($montant,2)."\n";
    }else{
        return "Montant invalide ou solde insuffisant\n";
    }

}

        public function getSolde() {
                return "solde: $" . number_format($this->solde,2)."\n";

        }

        public function setSolde($solde) {
            // vérifier que le solde est un nombre positif
            if (is_numeric($solde) && $solde >= 0) {
                $this->solde = $solde;
            } else {
                // appeler la fonction setting du fichier lirevaleur.php pour lire une nouvelle valeur
                $this->solde = setting("Solde invalide. Entrez une nouvelle valeur: ");
            }
        }
    

        public function getNumerocompte(){
                return "numero de compte: $".$this->numerocompte."\n";
        }


        public function getNomTitulaire(){
            return "nomTitulaire: $". number_format($this->nomTitulaire."\n");

        }
        public function getTypeCompte(){
            return "typeCompte: $". number_format($this->typeCompte."\n");
        }

    /**
     * Set the value of numerocompte
     *
     * @return  self
     */ 
    public function setNumerocompte($numerocompte)
    {
        // vérifier que le numéro de compte est un nombre entier
        if (is_int($numerocompte)) {
            $this->numerocompte = $numerocompte;
        } else {
            // appeler la fonction setting du fichier lirevaleur.php pour lire une nouvelle valeur
            $this->numerocompte = setting("Numéro de compte invalide. Entrez une nouvelle valeur: ");
            // appeler récursivement la méthode setNumerocompte avec la nouvelle valeur
            $this->setNumerocompte($numerocompte);
        }
        
        return $this;
    }

    /**
     * Set the value of nomTitulaire
     *
     * @return  self
     */ 
    public function setNomTitulaire($nomTitulaire)
    {
        // vérifier que le nom du titulaire est une chaîne de caractères non vide
        if (is_string($nomTitulaire) && !empty($nomTitulaire)) {
            $this->nomTitulaire = $nomTitulaire;
        } else {
            // appeler la fonction setting du fichier lirevaleur.php pour lire une nouvelle valeur
            $this->nomTitulaire = setting("Nom du titulaire invalide. Entrez une nouvelle valeur: ");
            // appeler récursivement la méthode setNomTitulaire avec la nouvelle valeur
            $this->setNomTitulaire($nomTitulaire);
        }
        
        return $this;
    }

    /**
     * Set the value of typeCompte
     *
     * @return  self
     */ 
    public function setTypeCompte($typeCompte)
    {
        // vérifier que le type de compte est soit 'cheque' soit 'epargne'
        if ($typeCompte == 'cheque' || $typeCompte == 'epargne') {
            $this->typeCompte = $typeCompte;
        } else {
            // appeler la fonction setting du fichier lirevaleur.php pour lire une nouvelle valeur
            $this->typeCompte = setting("Type de compte invalide. Entrez une nouvelle valeur: ");
            // appeler récursivement la méthode setTypeCompte avec la nouvelle valeur
            $this->setTypeCompte($typeCompte);
        }
        
        return $this;
    }
}
