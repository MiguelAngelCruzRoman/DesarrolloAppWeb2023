<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Carrera extends BaseController
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
        
        $carreraModel = model('CarreraModel');
        $data['carreras']=$carreraModel->findAll();
        
        return view('common/head').
               view('common/menu').
               view('carrera/mostrar',$data).
               view('common/footer');
    }

    public function agregar(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $data['title']="Agregar Carrera";
        $validation = \Config\Services::validation();
        
        if(strtolower($this->request->getMethod())==='get'){
            return view('common/head',$data).
               view('common/menu').
               view('carrera/agregar').
               view('common/footer');
        }

        $rules =[
            'nombre'=>'required|max_length[30]|min_length[9]',
            'acronimo'=>'required|max_length[9]'
        ];

        if(!$this->validate($rules)){
            return view('common/head',$data).
            view('common/menu').
            view('carrera/agregar',['validation'=>$validation]).
            view('common/footer');       
        }else{
            if($this->insert()){
                return redirect('carrera/mostrar','refresh');
            }
        }
        
    }

    
    public function insert(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $carreraModel = model('CarreraModel');
        $data = [
            "nombre"=>$_POST['nombre'],
            "acronimo"=>$_POST['acronimo']
        ];
        $carreraModel->insert($data,false);
        return true;        
    }
    
    public function delete($id){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $carreraModel = model('CarreraModel');
        $carreraModel->delete($id);

        return redirect('carrera/mostrar','refresh');
    }

    public function editar($id){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $carreraModel=model('CarreraModel');
        $data['carrera']=$carreraModel->find($id);
        
        return view('common/head').
               view('common/menu').
               view('carrera/editar',$data).
               view('common/footer');
    }

    public function update(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $carreraModel = model('CarreraModel');
    
        $data = array(
            "nombre"=>$_POST['nombre'],
            "acronimo"=>$_POST['acronimo']
        );
        $carreraModel->update($_POST['id'],$data);
        return redirect('carrera/mostrar','refresh');
    }

    public function buscar(){

        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('/','refresh');
        }

        $carreraModel = model('CarreraModel');

        if(isset($_GET['nombre']) && isset($_GET['acronimo'])){
            $nombre = $_GET['nombre'];
            $acronimo = $_GET['acronimo'];
            $data['carreras']=$carreraModel->like('nombre',$nombre)
                                ->like('acronimo',$acronimo)
                                ->findAll();
        }
        else {
            $nombre ="";
            $acronimo="";
            $data['carreras']=$carreraModel->findAll();
        }

        return view('common/head').
               view('common/menu').
               view('carrera/buscar',$data).
               view('common/footer');
    }
}

