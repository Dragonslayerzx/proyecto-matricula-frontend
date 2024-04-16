<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docenteLogin() {
        return view('docenteLogin');
    }

    public function vistaPrincipalDocente(){
        return view('docente');
    }

    public function logout(){
        return redirect()->route('docente.login');
    }

    public function home(){
        return redirect()->route('docente.home');
    }

    public function verClases(){
        return view('docenteClases');
    }

    public function docentePerfil(){
        return view('docentePerfil');
    }
}
