<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Alumno extends BaseController
{
    public function index()
    {
        //
    }

    public function mostrar(){
        
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }
        $alumnoModel = model('AlumnoModel');
        $data['alumnos']=$alumnoModel->findAll();

        return view('common/head').
               view('common/menu').
               view('alumno/mostrar',$data).
               view('common/footer');
    }

    public function agregar(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $gradoModel = model('GradoModel');
        $data['grados'] = $gradoModel->findAll();

        $grupoModel = model('GrupoModel');
        $data['grupos'] = $grupoModel->findAll();


        $data['title']="Agregar Alumno";
        $validation = \Config\Services::validation();
        
        if(strtolower($this->request->getMethod())==='get'){
            return view('common/head',$data).
               view('common/menu').
               view('alumno/agregar', $data).
               view('common/footer');
        }

        $rules =[
            'nombre'=>'required|max_length[15]|min_length[3]',
            'sexo'=>'required',
            'fechaNacimiento'=>'required'
        ];

        if(!$this->validate($rules)){
            return view('common/head',$data).
            view('common/menu').
            view('alumno/agregar',['validation'=>$validation,$data]).
            view('common/footer');       
        }else{
            if($this->insert()){
                return redirect('alumno/mostrar','refresh');
            }
        }
        
    }

    
    public function insert(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $alumnoModel = model('AlumnoModel');
        $data = [
            "nombre"=>$_POST['nombre'],
            "sexo"=>$_POST['sexo'],
            "fechaNacimiento"=>$_POST['fechaNacimiento'],
            "idGrado"=>$_POST['idGrado'],
            "idGrupo"=>$_POST['idGrupo']
        ];
        $alumnoModel->insert($data,false);
        return true;        
    }

    public function delete($id){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $alumnoModel = model('AlumnoModel');
        $alumnoModel->delete($id);
        return redirect('alumno/mostrar','refresh');
    }

    public function editar($id){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $alumnoModel=model('AlumnoModel');
        $data['alumno']=$alumnoModel->find($id);
        
        return view('common/head').
               view('common/menu').
               view('alumno/editar',$data).
               view('common/footer');
    }

    public function update(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $alumnoModel = model('AlumnoModel');
        $data = array(
            "nombre"=>$_POST['nombre'],
            "sexo"=>$_POST['sexo'],
            "fechaNacimiento"=>$_POST['fechaNacimiento']
        );
        $alumnoModel->update($_POST['id'],$data);
        return redirect('alumno/mostrar','refresh');
    }

    public function buscar(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $alumnoModel = model('AlumnoModel');

        if(isset($_GET['nombre']) && isset($_GET['sexo'])){
            $nombre = $_GET['nombre'];
            $sexo = $_GET['sexo'];
            $data['alumnos']=$alumnoModel->like('nombre',$nombre)
                            ->like('sexo',$sexo)
                            ->findAll();
        }
        else {
            $nombre ="";
            $sexo="";
            $data['alumnos']=$alumnoModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('alumno/buscar',$data).
               view('common/footer');
    }
}

