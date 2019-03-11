<?php

namespace LSP;

class Canari implements IManger, IVoler
{

    public function manger()
    {
        echo "Je suis un canari et je mange";
    }

    public function voler()
    {
        echo "Je suis un canari et je vole";
    }
}