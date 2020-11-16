<?php

require_once 'auto.php';
require_once './traits/licht.php';
require_once './traits/motor.php';

class Golf extends Auto {

use Licht, Motor;

    public function starten() {
        $this->lichtAn();
        $this->motorAn();
    }
}

