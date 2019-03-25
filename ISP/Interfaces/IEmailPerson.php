<?php

namespace ISP;

interface IEmailPerson
{
    public function getMail(): string;

    public function setMail(string $mail): void;
}