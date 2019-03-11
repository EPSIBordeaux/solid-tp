<?php


namespace ISP;


use DateTime;

class Personne implements IPersonne
{

    public function getAge(): int
    {
        // TODO: Implement getAge() method.
        return 0;
    }

    /**
     * @return DateTime
     * @throws \Exception
     */
    public function getDateDeNaissance(): DateTime
    {
        // TODO: Implement getDateDeNaissance() method.
        return new DateTime();
    }

    public function setDateDeNaissance(DateTime $dateDeNaissance): void
    {
        // TODO: Implement setDateDeNaissance() method.
    }

    public function envoyerEmail(string $message): void
    {
        // TODO: Implement envoyerEmail() method.
    }

    public function envoyerSMS(string $message): void
    {
        // TODO: Implement envoyerSMS() method.
    }

    public function getNom(): string
    {
        // TODO: Implement getNom() method.
        return "";
    }

    public function setNom(string $nom): void
    {
        // TODO: Implement setNom() method.
    }

    public function getPrenom(): string
    {
        // TODO: Implement getPrenom() method.
        return "";
    }

    public function setPrenom(string $prenom): void
    {
        // TODO: Implement setPrenom() method.
    }

    public function getTel(): string
    {
        // TODO: Implement getTel() method.
        return "";
    }

    public function setTel(string $tel): void
    {
        // TODO: Implement setTel() method.
    }

    public function getMail(): string
    {
        // TODO: Implement getMail() method.
        return "";
    }

    public function setMail(string $mail): void
    {
        // TODO: Implement setMail() method.
    }
}