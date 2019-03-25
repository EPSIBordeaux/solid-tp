<?php

namespace SRP;

class User extends People
{

    private $guid;

    public function __construct($firstName, $lastName, $birthDay, $guid)
    {
        parent::__construct($firstName, $lastName, $birthDay);
        $this->guid = $guid;
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