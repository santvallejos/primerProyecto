<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']= 'Principal';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/principalview');
        echo view('front/footerview');
    }
    public function quienessomos()
    {
        $data['titulo']= 'Quienes Somos';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/quienessomos');
        echo view('front/footerview');
    }
    public function acercade()
    {
        $data['titulo']= 'Acerca De';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/acercade');
        echo view('front/footerview');
    }
    public function login()
    {
        $data['titulo']= 'Login';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/login');
        echo view('front/footerview');
    }
    public function registro()
    {
        $data['titulo']= 'Registrarse';
        echo view('front/headview', $data);
        echo view('front/navbarview');
        echo view('front/registro');
        echo view('front/footerview');
    }
}
