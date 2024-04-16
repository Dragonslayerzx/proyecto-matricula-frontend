<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function empleadoLogin() {
        return view('empleadoLogin');
    }

    public function vistaPrincipalEmpleado() {
        return view('registroEmpleado');
    }

    public function expedienteRevisar() {
        // TODO: buscar por id y mandar al formulario
         $departamentos = [
            "Atlántida",
            "Colón",
            "Comayagua",
            "Copán",
            "Cortés",
            "Choluteca",
            "El Paraíso",
            "Francisco Morazán",
            "Gracias a Dios",
            "Intibucá",
            "Islas de la Bahía",
            "La Paz",
            "Lempira",
            "Ocotepeque",
            "Olancho",
            "Santa Bárbara",
            "Valle",
            "Yoro"
        ];

        $carreras = ['psicología', 'fisica', 'pedagogía'];

        return view('revisarExpediente', compact('departamentos', 'carreras'));
    }

    public function crearDocente() {
        $departamentos = [
            "Atlántida",
            "Colón",
            "Comayagua",
            "Copán",
            "Cortés",
            "Choluteca",
            "El Paraíso",
            "Francisco Morazán",
            "Gracias a Dios",
            "Intibucá",
            "Islas de la Bahía",
            "La Paz",
            "Lempira",
            "Ocotepeque",
            "Olancho",
            "Santa Bárbara",
            "Valle",
            "Yoro"
        ];

        return view('crearDocente', compact('departamentos'));
    }

    public function establecerMatricula() {
        return view('establecerMatricula');
    }

    public function logout() {
        return redirect()->route('empleado.login');
    }
}

