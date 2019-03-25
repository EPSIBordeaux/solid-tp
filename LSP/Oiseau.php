<?php

namespace LSP;

abstract class Oiseau implements IManger
{

    public function manger()
    {
        echo "Je suis un oiseau et je mange";
    }
}