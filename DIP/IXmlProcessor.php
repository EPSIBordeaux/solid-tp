<?php

namespace DIP;

interface IXmlProcessor
{
    public function process(): void;

    public function getData();
}