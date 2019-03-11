<?php

namespace ISP;

class Personne implements IPersonne
{

    private $nom;
    private $prenom;
    private $tel;
    private $dateDeNaissance;
    private $age;

    public function __construct($nom, $prenom, $tel, $dateDeNaissance, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->tel = $tel;
        $this->dateDeNaissance = $dateDeNaissance;
        $this->age = $age;
    }

    public function envoyerEmail(string $message): void
    {
        // TODO: Implement envoyerEmail() method.
    }

    public function envoyerSMS(string $message): void
    {
        // TODO: Implement envoyerSMS() method.
    }

    /**
     * @return mixed
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel(string $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getDateDeNaissance(): \DateTime
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param mixed $dateDeNaissance
     */
    public function setDateDeNaissance(\DateTime $dateDeNaissance): void
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}