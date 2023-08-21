<?php

namespace codeBanque ;

class Agence
{
    private int $codeAgence;
    private string $nom;
    private string $adresse;

    function __construct($codeAgence, $nom, $adresse)
    {
        $this->codeAgence = $codeAgence;
        $this->nom = $nom;
        $this->adresse = $adresse;
    }

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
    public function setCodeAgence(int $codeAgence): self
    {
        $this->codeAgence = $codeAgence;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adresse
     *
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @param string $adresse
     *
     * @return self
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
}








