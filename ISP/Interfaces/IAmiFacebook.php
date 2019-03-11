<?php

namespace ISP;


interface IAmiFacebook extends IBasicPersonne, IEmailPerson
{
    public function envoyerMessage(string $message): void;

    public function getPseudo(): string;

    public function setPseudo(string $pseudo): void;
}