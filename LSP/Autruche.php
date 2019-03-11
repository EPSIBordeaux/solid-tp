<?php

namespace LSP;

class Autruche extends Oiseau
{

    public function voler()
    {
        throw new \Error("Une autruche ne vole pas !");
    }
}