<?php

namespace ISP;

interface IBasicPersonne
{

    public function getAge(): int;

    public function getDateDeNaissance(): \DateTime;

    public function setDateDeNaissance(\DateTime $dateDeNaissance): void;

}