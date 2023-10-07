<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class panelcontroller extends Controller
{
    public function index()
    {
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfilid');

        $data['perfilid']=$perfil;

        $dato['titulo']='panel del usuario';
        echo view('front/headview',$dato);
        echo view('front/navbarview');
        echo view('back/usuario/usuariologueado',$data);
        echo view('front/footerview');
    }
}