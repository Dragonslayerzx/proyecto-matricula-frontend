<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class EmpleadoController extends Controller
{
    public function empleadoLogin() {
        return view('empleadoLogin');
    }

    public function vistaPrincipalEmpleado() {
        try {
            $client = new Client();
            $headers = ['Content-Type' => 'application/json'];
            $endpoint = 'http://localhost:8080/api/expediente/alumnos/obtener';
            $res = $client->get($endpoint);            
            $expedientes = json_decode($res->getBody());
            return view('registroEmpleado', compact('expedientes'));
        } catch (RequestException $e) {
            return redirect()->route('landing');
        }

    }

    public function expedienteRevisar($id) {
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

        $client = new Client();
        $endpointExpediente = 'http://localhost:8080/api/expediente/obtener/' . $id;
        $res = $client->get($endpointExpediente);
        $expediente = json_decode($res->getBody());

        $endpointCarreras = 'http://localhost:8080/api/carreras/obtener';
        $carrerasRes = $client->get($endpointCarreras);
        $carreras = json_decode($carrerasRes->getBody());

        return view('revisarExpediente', compact('departamentos', 'carreras', 'expediente'));
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

