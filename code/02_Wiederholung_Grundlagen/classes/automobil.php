<?php


abstract class Automobil {
    
    abstract public function tanken();
    abstract public function starten();

    public function ausschalten()
    {
        echo 'Auto aus';
    }

}


