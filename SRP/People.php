<?php

namespace SRP;


class People
{
    private $firstName;

    private $lastName;

    private $birthDay;

    public function __construct($firstName, $lastName, $birthDay)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDay = $birthDay;
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
     * @return People
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
     * @return People
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
     * @return People
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;
        return $this;
    }

}