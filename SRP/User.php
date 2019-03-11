<?php

namespace SRP;

class User extends People implements IUserInteraction
{

    private $guid;

    public function __construct($firstName, $lastName, $birthDay, $guid)
    {
        parent::__construct($firstName, $lastName, $birthDay);
        $this->guid = $guid;
    }

    public function isGraduated()
    {
        return false;
    }

    public function calculateAverage()
    {
        return 0;
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