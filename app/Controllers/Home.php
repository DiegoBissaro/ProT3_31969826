<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
       /*  $data[ "titulo"]="index";
        echo view("Front/head",$data); */
        return view('Front/index');
    }
    public function quienes_somos(): string
    {
       /*  $data[ "titulo"]="quienes_somos";
        echo view("Front/head",$data); */
        return view('Front/Quienes Somos');
    }
    public function acercade(): string
    {
       /*  $data[ "titulo"]="acercade";
        echo view("Front/head",$data); */
        return view('Front/Acerca de');
    }
    public function registro(): string
    {
       /*  $data[ "titulo"]="registro";
        echo view("Front/head",$data); */
        return view('Back/usuario/registro');
    }
    public function login(): string
    {
       /*  $data[ "titulo"]="login";
        echo view("Front/head",$data); */
        return view('Back/usuario/login');
    }
    public function cards_autoridades(): string
    {
       /*  $data[ "titulo"]="cards_autoridades";
        echo view("Front/head",$data); */
        return view('Front/Cards Autoridades');
    }
}