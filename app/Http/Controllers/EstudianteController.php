<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EstudianteController extends Controller
{
    public function estudianteLogin() {
        return view('estudianteLogin');
    }

    public function expedienteEstudianteForm() {
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

        $carreras = [
            "Ingeniería Informática",
            "Medicina",
            "Administración de Empresas",
            "Derecho",
            "Psicología"
        ];


        return view('expedienteEstudianteForm', compact('departamentos', 'carreras'));
    }

    public function mandarExpediente(Request $request) {
        try {
            $cliente = new Client();
            $headers = ['Content-Type' => 'multipart/form-data'];

            $body = '{
                    "nombres":"'.$request->input('nombres').'",
                    "apellidos":"'.$request->input('apellidos').'",
                    "correo":"'.$request->input('correo').'",
                    "sexo":"'.$request->get('sexo').'",
                    "departamento":"'.$request->get('departamento').'",
                    "carrera":"'.$request->get('carrera').'"
                    "foto": "'.$request->input('foto').'"
                }';
            
            $response = $cliente->post('localhost:8080/api/expediente/guardar', [
                'headers' => $headers,
                'body' => $body
            ]);

            return redirect()->route('landing');

        } catch(Error $e) {
            return redirect()->route('landing');
        }
        
    }

    public function formularioEnviado() {
        return view('postFormularioEnviado');
    }
}


