<?php

namespace DIP;

class Usage
{
    /**
     * @var XmlProcessor
     */
    private $processor;

    public function __construct(XmlProcessor $processor)
    {
        $this->processor = $processor;
    }

    public function run()
    {
        $this->processor->process();
    }
}