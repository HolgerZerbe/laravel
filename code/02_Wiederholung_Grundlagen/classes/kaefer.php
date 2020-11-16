<?php

require_once 'automobil.php';

class Kaefer extends Automobil {

    public function starten() {
        echo'brum brum <br>';
    }

    public function tanken() {
        echo 'voll getankt <br>';
    }

    public function wischer() {
        echo 'wisch wisch <br>';
    }
    public function schluessel() {
        $this->starten();
    }

}

