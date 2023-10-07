<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuariomodel;

class logincontroller extends BaseController
{
    public function index()
    {
    helper(['form','url']);

    $dato['titulo']='Login';
    echo view('front/headview', $dato);
    echo view('front/navbarview');
    echo view('back/usuario/login');
    echo view('front/footerview');
    }

    public function auth()
    {
        $session = session();
        $model = new usuariomodel();

        //Traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            $ba= $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/logincontroller');
            }

            //se verifican los datos ingresados para iniciar, si cumple las funciones para poder iniciar la sesion
            $verify_pass = password_verify($password, $pass);
            //password_verify determina los requisitos de configuracion de la contraseña
            if($verify_pass){
                $ses_data = [
                    'idusuario' => $data['idusuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfilid' => $data['perfilid'],
                    'logged_in' => TRUE
                ];

                //se cumple la verificacion, inicia sesion
                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido!!');
                return redirect()->to('/panel');
                //retunr return redirect()->to('/panel');//pagina principal
            }else{
                //no paso la validacion de la password
                $session->setFlashdata('msg', 'Password Incorrecta');
                return redirect()->to('/logincontroller');
            }
        }else{
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/logincontroller');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}