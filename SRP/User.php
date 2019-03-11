<?php

namespace SRP;

class User
{

    private $firstName;

    private $lastName;

    private $birthDay;

    private $guid;

    public function __construct($firstName, $lastName, $birthDay, $guid)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
        $this->guid = $guid;
    }

    public function insert()
    {

    }

    public function update()
    {

    }

    public function isGraduated()
    {
        // calcul de la moyenne de l'étudiant en fonction des notes de l'étudiant,
        // application de regles métiers (notes éliminatoires, etc...
        return false;
    }

    public function calculateAverage()
    {
        $avg = 0;
        // calcul en fonction des notes de l'étudiants, application de regles métiers (notes éliminatoires, etc...
        return $avg;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param mixed $birthDay
     * @return User
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * @param mixed $guid
     * @return User
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }
}