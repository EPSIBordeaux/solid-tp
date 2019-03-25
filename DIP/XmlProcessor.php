<?php

namespace DIP;

abstract class XmlProcessor implements IXmlProcessor
{

    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function process(): void
    {
        $data = $this->getData();
        // TODO process
    }
}