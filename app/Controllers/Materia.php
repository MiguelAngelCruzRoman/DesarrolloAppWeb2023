<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Materia extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        $materiaModel = model('MateriaModel');
        $data['materias']=$materiaModel->findAll();
        
        return view('common/head').
               view('common/menu').
               view('materia/mostrar',$data).
               view('common/footer');
    }

    public function agregar(){
        return view('common/head').
               view('common/menu').
               view('materia/agregar').
               view('common/footer');
    }

    public function insert(){
        $materiaModel = model('MateriaModel');

        $data = array(
            "nombre"=>$_POST['nombre'],
            "nombreCorto"=>$_POST['nombreCorto'],
            "clave"=>$_POST['clave'],
            "noUnidades"=>$_POST['noUnidades']
        );

        $materiaModel->insert($data);
        return redirect('materia/mostrar','refresh');
    }

    public function delete($idMateria){
        $materiaModel = model('MateriaModel');
        $materiaModel->delete($idMateria);

        return redirect('materia/mostrar','refresh');
    }

    public function editar($idMateria){
        $materiaModel=model('MateriaModel');
        $data['materia']=$materiaModel->find($idMateria);
        
        return view('common/head').
               view('common/menu').
               view('materia/editar',$data).
               view('common/footer');
    }

    public function update(){
        $materiaModel = model('MateriaModel');
        $data = array(
            "nombre"=>$_POST['nombre'],
            "nombreCorto"=>$_POST['nombreCorto'],
            "clave"=>$_POST['clave'],
            "noUnidades"=>$_POST['noUnidades']
        );
        $materiaModel->update($_POST['idMateria'],$data);
        return redirect('materia/mostrar','refresh');
    }

    public function buscar(){
        $materiaModel = model('MateriaModel');

        if(isset($_GET['nombre']) && isset($_GET['nombreCorto']) && isset($_GET['clave']) && isset($_GET['noUnidades'])){
            $nombre = $_GET['nombre'];
            $nombreCorto = $_GET['nombreCorto'];
            $clave = $_GET['clave'];
            $noUnidades = $_GET['noUnidades'];
            $data['materias']=$materiaModel->like('nombre',$nombre)
                                ->like('nombreCorto',$nombreCorto)
                                ->like('clave',$clave)
                                ->like('noUnidades',$noUnidades)
                                ->findAll();
        }
        else {
            $nombre ="";
            $sexo="";
            $clave="";
            $noUnidades="";
            $data['materias']=$materiaModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('materia/buscar',$data).
               view('common/footer');
    }
}

