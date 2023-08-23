<?php
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

        public function getNumerocompte(){
                return "numero de compte: $".$this->numerocompte."\n";
        }


        public function getNomTitulaire(){
            return "nomTitulaire: $". number_format($this->nomTitulaire."\n");

        }
        public function getTypeCompte(){
            return "typeCompte: $". number_format($this->typeCompte."\n");
        }
    }

    $moncompte = new BankAccount(1000,123456780,'johnny','cheque');
    echo $moncompte->getSolde();
    echo $moncompte->getSolde();