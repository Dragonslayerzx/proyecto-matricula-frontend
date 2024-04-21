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
            // se debe verificar primero que el empleado este logeado
            $client = new Client();
            $headers = ['Content-Type' => 'application/json'];

            $endpoint = 'http://localhost:8080/api/matricula/expediente/alumnos/obtener';
            $res = $client->get($endpoint);            
            $expedientes = json_decode($res->getBody());
            return view('registroEmpleado', compact('expedientes'));
        } catch (RequestException $e) {
            return redirect()->route('landing');
        }

    }

    public function verificarEmpleadoLogin(Request $req) {

        $clave = $req->input('clave');
        $contrasena = $req->input('contrasena');

        $body = json_encode([
            'clave' => $clave,
            'contrasena' => $contrasena
        ]);

        $client = new Client();

        $headers = ['Content-Type' => 'application/json'];
        $endpoint = 'http://localhost:8080/api/matricula/empleado/verificacion';
        $res = $client->post($endpoint, [
            'headers' => $headers,
            'body' => $body
        ]);

        if (json_decode($res->getBody())) {
            $obtenerEmpleadoEndpoint = 'http://localhost:8080/api/matricula/empleado/' . $clave;
            $empleadoRes = $client->get($obtenerEmpleadoEndpoint);
            $empleado = json_encode($empleadoRes);
            return redirect()->route('empleado.home')->with($empleado);
        }

        return redirect()->route('empleado.login');
    }

    public function expedienteRevisar($id) {
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
        $endpointExpediente = 'http://localhost:8080/api/matricula/expediente/obtener/' . $id;
        $res = $client->get($endpointExpediente);
        $expediente = json_decode($res->getBody());

        $endpointCarreras = 'http://localhost:8080/api/matricula/carreras/obtener';
        $carrerasRes = $client->get($endpointCarreras);
        $carreras = json_decode($carrerasRes->getBody());

        return view('revisarExpediente', compact('departamentos', 'carreras', 'expediente'));
    }

    public function guardarEstudiante(Request $req) {
        $nombres = $req->input('nombres');
        $apellidos = $req->input('apellidos');
        $contrasena = $req->input('contrasena');
        $sexo = $req->get('sexo') == 'Masculino' ? true : false;
        $direccion = $req->get('departamento');
        $carrera = $req->get('carrera');
        $idExpediente = $req->input('idExpediente');
        $foto = $req->input('foto');

       $headers = ['Content-type' => 'application/json; charset=utf-8'];
       $bodyData = [
        "nombre"=> $nombres,
        "apellidos" => $apellidos,
        "contrasena" => $contrasena,
        "sexo" => $sexo,
        "direccion" => $direccion,
        "idExpediente" => $idExpediente,
        "carrera" => $carrera,
        "foto" => $foto
       ];

       $body = json_encode($bodyData);

        $endpoint = 'http://localhost:8080/api/alumnos/crear';
        $client = new Client();
        $res = $client->post($endpoint, [
            'headers' => $headers,
            'body' => $body
        ]);

       if (json_decode($res->getBody()))
            return redirect()->route('empleado.home');
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

    public function enviarDatosFechaMatricula(Request $req) {
        $primerDia = $req->input('primerDia');
        $ultimoDia = $req->input('ultimoDia');
        $horaComienzo = $req->input('horaComienzo');
        $horaFinal = $req->input('horaFinal');
        $anio = $req->input('anio');
        $periodo = $req->get('periodo');
        
        $dateFrom = date('Y-m-d', strtotime($primerDia));
        $dateTo = date('Y-m-d', strtotime($ultimoDia));
        $hourFrom = date('H', strtotime($horaComienzo));
        $hourTo = date('H', strtotime($horaFinal));
        //TODO terminar esta logica para poder establecer fechas matriculas

    }

    public function logout() {
        return redirect()->route('empleado.login');
    }

    public function registrarEdificio() {
        return view('registroEdificio');
    }

    public function registrarCarrera() {

        $client = new Client();
        $coordinadoresEndpoint = 'http://localhost:8080/api/matricula/coordinadores';

        $res = $client->get($coordinadoresEndpoint);
        $coordinadores = json_decode($res->getBody());
        return view('registroCarrera', compact('coordinadores'));
    }

    public function guardarCarrera(Request $req) {
        $nombreCarrera = $req->input('nombreCarrera');
        $coordinador = $req->get('coordinador');

        $headers = ['Content-Type' => 'application/json']; 
        $bodyData = [
            'nombre' => $nombreCarrera,
            'coordinador' => $coordinador
        ];

        $body = json_encode($bodyData);

        $guardarCarreraEndpoint = 'http://localhost:8080/api/matricula/carreras/registrar';
        $client = new Client();
        $res = $client->post($guardarCarreraEndpoint, [
            'headers' => $headers,
            'body' => $body
        ]);

        if (!$res) {
            return redirect()->route('empleado.home');
        }

        return redirect()->route('registrar.carrera');
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

