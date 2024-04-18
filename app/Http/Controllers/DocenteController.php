<?php

namespace App\Http\Controllers;

use DateTime;
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
       //Simulando obtencion de datos
       $usuario = [
        'cuenta' => '28372',
        'nombre' => 'John',
        'apellido' => 'Krasinski',
        'sexo' => '1',
        'direccion' => 'La melgar',
        'email' => 'joni@gmail.com',
        'especializacion' => 'Ingeniero en Sistemas',
        'fechaContrato' => new DateTime('2015/01/22') 
       ];
        return view('docentePerfil', compact('usuario'));
    }

    public function editarPerfil(){
       //Simulando obtencion de datos
       $usuario = [
        'cuenta' => '28372',
        'contrasena' => 'superchicken' 
       ];
        return view('docenteClave', compact('usuario'));
    }

    public function cambiarClave(Request $request){
        return redirect()->route('docente.editar.perfil');
    }

    public function verHistorial(){
        return view('docenteHistorial');
    }

}
