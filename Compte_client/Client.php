<?php

namespace Comptes_Clients ;

class Clients 
{
    private string $indentifiant_client ;
    private string $nom_client ;
    private string $premon_client ;
    private string $birthdate;
    private string $e_mail;

    function __construct($indentifiant_client, $nom_client, $premon_client, $birthdate, $e_mail)
    {
        $this->indentifiant_client = $indentifiant_client;
        $this->nom_client = $nom_client;
        $this->premon_client = $premon_client;
        $this->birthdate = $birthdate;
        $this->e_mail = $e_mail;
    }

    /**
     * Get the value of indentifiant_client
     *
     * @return string
     */
    public function getIndentifiantClient(): string
    {
        return $this->indentifiant_client;
    }

    /**
     * Set the value of indentifiant_client
     *
     * @param string $indentifiant_client
     *
     * @return self
     */
    public function setIndentifiantClient(string $indentifiant_client): self
    {
        $this->indentifiant_client = $indentifiant_client;

        return $this;
    }

    /**
     * Get the value of nom_client
     *
     * @return string
     */
    public function getNomClient(): string
    {
        return $this->nom_client;
    }

    /**
     * Set the value of nom_client
     *
     * @param string $nom_client
     *
     * @return self
     */
    public function setNomClient(string $nom_client): self
    {
        $this->nom_client = $nom_client;

        return $this;
    }

    /**
     * Get the value of premon_client
     *
     * @return string
     */
    public function getPremonClient(): string
    {
        return $this->premon_client;
    }

    /**
     * Set the value of premon_client
     *
     * @param string $premon_client
     *
     * @return self
     */
    public function setPremonClient(string $premon_client): self
    {
        $this->premon_client = $premon_client;

        return $this;
    }

    /**
     * Get the value of birthdate
     *
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * Set the value of birthdate
     *
     * @param string $birthdate
     *
     * @return self
     */
    public function setBirthdate(string $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get the value of e_mail
     *
     * @return string
     */
    public function getEMail(): string
    {
        return $this->e_mail;
    }

    /**
     * Set the value of e_mail
     *
     * @param string $e_mail
     *
     * @return self
     */
    public function setEMail(string $e_mail): self
    {
        $this->e_mail = $e_mail;

        return $this;
    }
}