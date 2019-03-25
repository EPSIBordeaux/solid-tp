<?php

namespace LSP;

class Canari extends Oiseau implements IVoler
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