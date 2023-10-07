<?php
namespace App\Controllers;
use App\Models\usuariomodel;
use CodeIgniter\Controller;

class usuariocontroller extends Controller{

    /*Biblioteca de codigo disponible de codeigniter*/
    public function _construct(){
        helper(['form','url']);
    }
    public function create() {
        $dato['titulo']='Registro';
        echo view('front/headview', $dato);
        echo view('front/navbarview');
        echo view('back/usuario/registro');
        echo view('front/footerview');
    }

    public function formValidation() {

        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'
        ],
        
    );
    $formModel = new usuariomodel();

    if(!$input){
        $data['titulo']='Registro';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footerview');
    }else{
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('success', 'Usuario registrado con exito');
        return redirect()->to('/registro');
    }
    } 
}
