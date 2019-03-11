<?php

namespace LSP;

class Oiseau implements IManger, IVoler
{

    public function manger()
    {
        echo "Je suis un oiseau et je mange";
    }

    public function voler()
    {
        echo "Je suis un oiseau et je vole";
    }
}