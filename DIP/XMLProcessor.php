<?php

namespace DIP;

class XMLProcessor
{
    /**
     * @var XmlSource
     */
    private $source;
    /**
     * @var string
     */
    private $filename;
    /**
     * @var string
     */
    private $connString;

    public function __construct(XmlSource $source, string $filename, string $connString)
    {
        $this->source = $source;
        $this->filename = $filename;
        $this->connString = $connString;

        if ($source == XmlSource::File) {
            // TODO: charger le XML depuis le fichier
        } else if ($source == XmlSource::Database) {
            // TODO: charger le XML depuis la base de données
        }
    }

    public function process()
    {
    }
}
