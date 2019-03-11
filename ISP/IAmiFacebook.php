<?php

namespace ISP;


interface IAmiFacebook
{

    public function getAge(): int;

    public function getDateDeNaissance(): \DateTime;

    public function setDateDeNaissance(\DateTime $dateDeNaissance): void;

    public function envoyerMessage(string $message): void;

    public function getPseudo(): string;

    public function setPseudo(string $pseudo): void;

    public function getMail(): string;

    public function setMail(string $mail): void;
}