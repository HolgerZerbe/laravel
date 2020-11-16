<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function printMessage() {
        return 'Hallo Welt wie geht es dir?';
    }

    public function printUserId ($id = null) {
        return '<h1>Der User hat folgende Id: <span style="color: red;">' . $id . '<br><span style="color: grey;"> Vielen Dank! </h1>';
    }

    public function printGanzerName ($nachname, $vorname) {
        return 'Der Nutzer heißt ' . $vorname . ' ' . $nachname;
    }
}
