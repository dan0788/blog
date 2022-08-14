<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HolaController extends Controller{
    public function index(string $name){
        return view("saludo", compact("name"));
    }

    public function db(){
        $users = DB::table('fortalezas')->get();

        return $users;
    }

}
