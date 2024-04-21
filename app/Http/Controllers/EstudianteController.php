<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\File\Exception\FormSizeFileException;

class EstudianteController extends Controller
{
    public function estudianteLogin() {
        return view('estudianteLogin');
    }

    public function verificarLogin(Request $req) {
        try {
            $endpoint = 'http://localhost:8080/api/alumnos/verificacion';
            $client = new Client();
            $numeroCuenta = $req->input('numeroCuenta');
            $passw = $req->input('contrasena');

            $headers = ['Content-Type' => 'application/json'];
            $body = '{
                    "numeroCuenta": "'.$numeroCuenta.'",
                    "contrasena": "'.$passw.'"
                }';

            $res = $client->post($endpoint, [
                'headers' => $headers,
                'body' => $body
            ]);

            if ($res) {
                try {
                    $alumnoEndpoint = 'http://localhost:8080/api/alumnos/' . $numeroCuenta;
                    $alumnoRes = $client->get($alumnoEndpoint); 
                    $alumno = json_decode($alumnoRes->getBody());
                    return view('estudiante', compact('alumno'));
                } catch (RequestException $e) {
                    echo $e->getMessage();
                   // return redirect()->route('landing');
                } 
            } else {
                return redirect()->route('estudiante.login');
            } 

            /* if ($res->getStatusCode() > 200 && $res->getStatusCode() < 300) {
                echo json_decode($res->getBody());
                $c = new Client();
                $getEstudianteURL = 'http://localhost:8080/api/alumno/' . $correo;
                $est = $c->get($getEstudianteURL);
                $estudiante = json_decode($est->getBody());
                return redirect()->route('estudiante.home')->with($estudiante); 
            } */

        } catch (RequestException $e) {
            return redirect()->route('estudiante.login');
        }
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
            $endpoint = 'localhost:8080/api/matricula/expediente/guardar';
            $cliente = new Client();
            $headers = ['Content-Type' => 'multipart/form-data'];

            $sexo = $request->get('sexo') == 'Masculino' ? true: false;

            $body = json_encode([
                'apellidos' => $request->input('apellidos'),
                'nombres' => $request->input('nombres'),
                'correo' => $request->input('correo'),
                'sexo' => $sexo,
                'direccion' => $request->get('departamento'),
                'carrera' => $request->get('carrera')
            ]);
           
            $path = "images/";
            $image = $request->file('foto');
            $imageName = $image->getClientOriginalName();
            $image->move($path, $imageName);
            $res = $cliente->post($endpoint, [
                'multipart' => [ 
                    [
                        'name' => 'alumno',
                        'contents' => $body
                    ],
                    [
                        'name' => 'image',
                        'contents' => fopen($path . $imageName, 'r')
                    ]
                ]
              /*   'headers' => $headers,
                'body' => $body */
            ]);

            if (json_decode($res->getBody()))
              return redirect()->route('formulario.enviado');

            return redirect()->route('landing');

        } catch(FormSizeFileException $e) {
            return redirect()->route('landing');
        }
        
    }

    public function formularioEnviado() {
        return view('postFormularioEnviado');
    }

    public function vistaPrincipalEstudiante(){
        return view('estudiante');
    }

    public function verForma03(){
        return view('estudianteClases');
    }

    public function estudianteLogout() {
        return redirect()->route('estudiante.login');
    }

    public function estudiantePerfil() {
        $alumno = [
            'cuenta' => '28372',
            'nombre' => 'Pam',
            'apellido' => 'Beesly',
            'sexo' => '0',
            'direccion' => 'La melgar',
            'email' => 'pamcasso@gmail.com',
            'carrera' => 'Administracion Aduanera', 
           ];
        return view('estudiantePerfil', compact('alumno'));
    }

    public function editarPerfil() {
        $alumno = [
            'cuenta' => '13113',
            'contrasena' => 'polloshermanos'
        ];
        return view('estudianteClave', compact('alumno'));
    }

    public function cambiarClave(Request $request){
       return redirect()->route('estudiante.editar.perfil');
    }

    public function verHistorial(){
        return view('estudianteHistorial');
    }

    public function verPaginamatricula() {
        $carreras = ["Ing.Sistemas", "ing.Civil", "Psicologia", "Medicina", "Finanzas"];
        $clases = ['MM110', "POO", "MM201", "PS-314", "Resistencia de materiales", "Sentimientos I"];
        $docentes = [[

            "nombreClase" => "Lenguajes de Programación",
            "docente" => "Harold Coello",
            "codigo" => "001",
            "seccion" => "1700",
            "uv" => "4"
            
            ],
            [

                "nombreClase" => "Programación Orientada a Objetos",
                "docente" => "José Mario Inestroza",
                "codigo" => "002",
                "seccion" => "1100",
                "uv" => "4"
                
            ],
            [

                "nombreClase" => "Seguridad Informática",
                "docente" => "Alex Moncada",
                "codigo" => "005",
                "seccion" => "1900",
                "uv" => "5"
                
            ]
        ];

        return view('matricula', compact('carreras', 'clases', 'docentes'));
    }


}


