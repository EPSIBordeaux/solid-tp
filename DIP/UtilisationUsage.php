<?php

namespace DIP;

class UtilisationUsage
{

    public function __construct()
    {
        $fromFile = new Usage(new FileXmlProcessor("fichier.xml"));
        $fromDb = new Usage(new DatabaseXmlProcessor("file.xml", "root:root@localhost"));
    }
}