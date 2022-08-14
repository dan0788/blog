<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HolaController extends Controller{
    public function index(string $name){
        return view("saludo", compact("name"));
    }

    public function db(int $id){
        //$users = DB::table('fortalezas')->get("id")->where("id",$id);//1ra forma de consultar
        //$users=DB::select("select elemento from fortalezas where id={$id}");//2da forma de consultar
        /*$tablas=DB::select("SELECT * FROM pg_catalog.pg_tables WHERE schemaname !=
        'pg_catalog' AND schemaname != 'information_schema'");
        //return json_encode($tablas);
        /*$arrayTables=array();
        $long=sizeOf($tablas);
        for ($i=0; $i < $long; $i++) {
            array_push($arrayTables,$tablas[$i]->tablename);
        }
        return $arrayTables;*/
        //$tablas=DB::select("SELECT table_name FROM information_schema.tables");//info de todas las tablas de postgres

        //consulta de las tablas que hay en mi database
        $tablas=DB::select("SELECT table_name --seleccionamos solo la columna del nombre de la tabla
        FROM information_schema.tables --seleccionamos la información del esquema
        WHERE table_schema='public' --las tablas se encuentran en el esquema publico
        AND table_type='BASE TABLE'; --tiene que ser del tipo table ya que aqui se listan tambien las vistas");
        return $tablas;
    }

}
