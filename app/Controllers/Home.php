<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }


    public function funcion_AcercaDe()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/AcercaDe');
               // echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }


    public function funcion_loguin()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/loguin');
                //echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }

    public function funcion_registracion()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/registracion');
                //echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }

    public function funcion_quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
                //echo view('front/Principal_CafeteriaNIPPON');
        echo view('front/footer');
    }


}
