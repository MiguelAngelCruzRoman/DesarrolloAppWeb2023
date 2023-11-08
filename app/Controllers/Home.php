<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head') .
                view('home/login') .
                view('common/footer');
            }
    
            $rules = [
                'email' => 'required',
                'pass'=>'required'
            ];
    
            if (! $this->validate($rules)) {
                return view('common/head') .
                view('home/login') .
                view('common/footer');
            }
            else{
                //si pasa las reglas
                $email = $_POST['email'];
                $password = $_POST['pass'];
                $userModel = model('UsuarioModel');
                $data['usuario']= $userModel->like('email',$email)
                                ->Like('pass',$password)
                                ->findAll();
                print_r($data['usuario']);
                if(count($data['usuario'])>0){
                    print "creo la sesión";
                    print $data['usuario'][0]->idUsuario;
                    $session = session();

                    $newdata = [
                        'idUsuario' => $data['usuario'][0]->idUsuario,
                        'nombreUsuario'  => $data['usuario'][0]->nombreUsuario,
                        'email'     => $data['usuario'][0]->email,
                        'logged_in' => true,
                    ];
                    
                    $session->set($newdata);

                }
                else{
                    return redirect('home/login','refresh');
                }
            }

       
        
    }
}
