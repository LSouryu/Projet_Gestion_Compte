<?php

class Agence
{
    private int $codeAgence;
    private string $nomAgence;
    private string $adresseAgence;

<<<<<<< HEAD
    public function __construct($name , $adress){
        $this ->name = $name;
        $this ->adress =$adress;
    }
        public function addAccount($account){
            array_push($this ->account,$account);

        }
        public function getAccount(){
            return $this ->account;
        }
    }

class co
  
=======
    function __construct()
    {}

    /**
     * Get the value of codeAgence
     *
     * @return int
     */
    public function getCodeAgence(): int
    {
        return $this->codeAgence;
    }

    /**
     * Set the value of codeAgence
     *
     * @param int $codeAgence
     *
     * @return self
     */
    public function setCodeAgence(): self
    {
        $codeAgence = readline("Veuillez entrer un nombre entre 100 et 999 : ");
        $this->codeAgence = $codeAgence;

        return $this;
    }

    /**
     * Get the value of nomAgence
     *
     * @return string
     */
    public function getNomAgence(): string
    {
        return $this->nomAgence;
    }

    /**
     * Set the value of nomAgence
     *
     * @param string $nomAgence
     *
     * @return self
     */
    public function setNomAgence(): self
    {
        $nomAgence = readline("Veuillez entrer le nom de l'agence : ");
        $this->nomAgence = $nomAgence;

        return $this;
    }

    /**
     * Get the value of adresseAgence
     *
     * @return string
     */
    public function getAdresseAgence(): string
    {
        return $this->adresseAgence;
    }

    /**
     * Set the value of adresseAgence
     *
     * @param string $adresseAgence
     *
     * @return self
     */
    public function setAdresseAgence(): self 
    {
    $codePostal = trim(intval(readline("Veuillez saisir un code postal : ")));
    $city = trim((readline("Veuillez saisir un nom de ville : ")));
    $number = trim(intval(readline("Veuillez saisir un numéro de rue : ")));
    $street = trim((readline("Veuillez saisir le nom de la rue : ")));
    $adresseAgence = "$number $street, $codePostal $city";
    $this->adresseAgence = $adresseAgence;

    return $this;
    }
}

echo "Création d'une nouvelle agence" . PHP_EOL;

$agence = new Agence();
$agence->setCodeAgence();
$agence->setNomAgence();
$agence->setAdresseAgence();

echo "Agence créée avec succès !" . PHP_EOL;

echo "Code de l'agence : " . $agence->getCodeAgence() . PHP_EOL;
echo "Nom de l'agence : " . $agence->getNomAgence() . PHP_EOL;
echo "Adresse de l'agence : " . $agence->getAdresseAgence() . PHP_EOL;

$data = [
    'Code Agence' => $agence->getCodeAgence(),
    'Nom Agence' => $agence->getNomAgence(),
    'Adresse Agence' => $agence->getAdresseAgence()
];

$csvFilename = 'agence.csv';
$file = fopen($csvFilename, 'w');
fputcsv($file, array_keys($data));
fputcsv($file, $data);
fclose($file);

echo "Données exportées avec succès dans $csvFilename" . PHP_EOL;
?>
>>>>>>> a973d5713d881fb226f8b9d2f1124bf1dd78d7f2
