<?php

namespace App\Http\Controllers;

class HolaController extends Controller{
    public function __invoke(string $name){
        return "Hola {$name}";
    }
}
