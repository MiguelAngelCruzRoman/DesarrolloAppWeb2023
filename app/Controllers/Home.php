<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $sql ="select * from alumno";
        $query =$db->query($sql);
        $data['alumnos'] = $query ->getResult();

        return view('home/head').
                view('home/menu').
                view('home/listaAlumnos',$data).
                view('home/footer');
    }
}
