<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function empleadoLogin() {
        return view('empleado');
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

        $carreras = ['psicología', 'fisica', 'pedagogía'];

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



        return view('crearDocente', compact('departamentos', 'carreras'));
    }

    public function establecerMatricula() {
        return view('establecerMatricula');
    }

    public function logout() {
        return redirect()->route('empleado.login');
    }

    public function registrarEdificio() {
        return view('registroEdificio');
    }

    public function registrarCarrera() {

        $coordinadores = ["1", "2", "3"];

        return view('registroCarrera', compact('coordinadores'));
    }

    public function registrarSalon() {

        $edificios = ["b2", "1847"];

        return view('registroSalon', compact('edificios'));
    }

    public function expedienteDocenteRevisar() {

        $carrera = "is";
        $departamento = "FM";
        $sexo = "Masculino";
        $cargo = 'D';

        return view('revisarExpedienteDocente', compact('carrera', 'departamento', 'sexo', 'cargo'));
    }
}

