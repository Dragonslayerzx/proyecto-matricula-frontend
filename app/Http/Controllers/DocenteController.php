<?php

namespace App\Http\Controllers;
use DateTime;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DocenteController extends Controller
{
    public function docenteLogin() {
        return view('docenteLogin');
    }

    public function verificarLogin(Request $req) {
        //se obtienen datos del form
        $clave = $req->input('clave');
        $contrasena = $req->input('contrasena');

        //Se crea un cliente guzzle
        $client = new Client();

        // se contruye el cuerpo en formato json
        $body = json_encode([
            'clave' => $clave,
            'contrasena' => $contrasena
        ]);

        //encabezados de la solicitud
        $headers = ['Content-Type' => 'application/json'];

        //se realiza solicitud POST
        $endpoint = 'http://localhost:8080/api/matricula/docente/verificacion';
        $res = $client->post($endpoint, [
            'headers' => $headers,
            'body' => $body
        ]);
        if (json_decode($res->getBody())) {
            $obtenerDocenteEndpoint = 'http://localhost:8080/api/matricula/docente/obtener/' . $clave;
            $res = $client->get($obtenerDocenteEndpoint);
            // Decodificamos la respuesta como un array asociativo
            $docente = json_decode($res->getBody(), true); // Decodificamos la respuesta como un array asociativo

            // Verificamos si el docente es coordinador
            $esCoordinador = $docente['coordinador'] ?? false;
        
            // Redirigimos a la vista correspondiente dependiendo de si es coordinador o no
            if ($esCoordinador) {
                session()->put('docente', $docente);
                return redirect()->route('coordinador.home');
            } else {
                session()->put('docente', $docente);
                return redirect()->route('docente.home');
            }
        }
        return redirect()->route('docente.login');
    }

    public function vistaPrincipalDocente(){
        $docente = session()->get('docente');
        return view('docente', compact('docente'));
    }

    public function logout(){
        return redirect()->route('docente.login');
    }

    public function verClases($idDocente){
        $clases = [
            ['nombre' => 'Calculo 2', 'codigo' => 'MM202', 'seccion' =>'1500', 'uv' => '5'], 
            ['nombre' => 'POO', 'codigo' => 'IS-410', 'seccion' =>'1600', 'uv' => '5'], 
            ['nombre' => 'Circuitos', 'codigo' => 'IS-311', 'seccion' =>'1700', 'uv' => '3'] 
        ];

        $client = new Client();
        $endpointSeccionesDocente = 'http://localhost:8080/api/matricula/clases/secciones/'. $idDocente;
        $res = $client->get($endpointSeccionesDocente);
        $cardSeccion = json_decode($res->getBody());

        return view('docenteClases', compact('clases', 'cardSeccion'));
    }

    public function verCurso($idSeccion){
        //mandar idseccion para devolver lista de clases

        //simulando obtencion
        $alumnos = [
            [
                'numerocuenta' => '2021001',
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'correo' => 'juan@example.com',
                'direccion' => 'Calle 123',
            ],
            [
                'numerocuenta' => '2021002',
                'nombre' => 'María',
                'apellido' => 'López',
                'correo' => 'maria@example.com',
                'direccion' => 'Avenida XYZ',
            ],
        ];
        return view('docenteVerCurso', compact('idSeccion', 'alumnos'));
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

    public function cambiarClave(){
        return redirect()->route('docente.editar.perfil');
    }

    public function verHistorial(){
        return view('docenteHistorial');
    }

    //Coordinador
    public function cordiHome(){
        $docente = session()->get('docente');
        return view('coordinador', compact('docente'));
    }

    public function cordiPerfil(){
        $usuario = [
            'cuenta' => '28372',
            'nombre' => 'Saul',
            'apellido' => 'Goodman',
            'sexo' => '1',
            'direccion' => 'La melgar',
            'email' => 'jimmy@gmail.com',
            'especializacion' => 'Abogado',
            'fechaContrato' => new DateTime('2015/01/22') 
           ];
        return view('coordinadorPerfil', compact('usuario'));
    }

    public function cordiHistorial(){
        return view('coordinadorHistorial');
    }

    public function cordiClases($idDocente){


        $clasesBeta = [
            ['nombre' => 'Calculo 2', 'codigo' => 'MM202', 'seccion' =>'1500', 'uv' => '5'], 
            ['nombre' => 'POO', 'codigo' => 'IS-410', 'seccion' =>'1600', 'uv' => '5'], 
            ['nombre' => 'Circuitos', 'codigo' => 'IS-311', 'seccion' =>'1700', 'uv' => '3'] 
        ];

        $client = new Client();
        $endpointSeccionesDocente = 'http://localhost:8080/api/matricula/clases/secciones/'. $idDocente;
        $res = $client->get($endpointSeccionesDocente);
        $clases = json_decode($res->getBody());

        return view('coordinadorClases', compact('clases'));
    }

    public function cordiVerCurso($idSeccion){
        //mandar idSeccion para devolver lista de alumnos matriculados
        $alumnos = [
            [
                'numerocuenta' => '2021001',
                'nombre' => 'Juan',
                'apellido' => 'Perez',
                'correo' => 'juan@example.com',
                'direccion' => 'Calle 123',
            ],
            [
                'numerocuenta' => '2021002',
                'nombre' => 'María',
                'apellido' => 'López',
                'correo' => 'maria@example.com',
                'direccion' => 'Avenida XYZ',
            ],
        ];
        return view('coordinadorVerCurso', compact('alumnos', 'idSeccion'));
    }

    public function cordiPlan(){
        $secciones = [
        [
            'idSeccion' => '1',
            'nombre' => 'Mecanica Cuantica',
            'horaInicio' => '07:00',
            'horaFin' => '08:00',
            'docente' => 'Javier Santaolalla',
            'edificio' => 'E1',
            'salon' => '301',
        ],
        [
            'idSeccion' => '2',
            'nombre' => 'Calculo 2',
            'horaInicio' => '09:00',
            'horaFin' => '10:00',
            'docente' => 'Erick Pineda',
            'edificio' => 'F1',
            'salon' => '108',
        ],
    ];
        return view ('coordinadorPA', compact('secciones'));
    }

    public function crearSeccion(){

        $edificios = [
            ['id' => 1, 'nombre' => 'D1'],
            ['id' => 2, 'nombre' => 'B2'],
            ['id' => 3, 'nombre' => '1847']
        ];
        $salonesDisponibles = [
            ['id' => 1, 'nombre' => 'Salón A'],
            ['id' => 2, 'nombre' => 'Salón B'],
            ['id' => 3, 'nombre' => 'Salón C']
        ];

        $docentesDisponibles = [
            ['id' => 1, 'nombre' => 'Juan Pérez'],
            ['id' => 2, 'nombre' => 'María García'],
            ['id' => 3, 'nombre' => 'Carlos López']
        ];

        $equiposDisponibles = [
            ['id' => 1, 'nombre' => 'Data show'],
            ['id' => 2, 'nombre' => 'Routers'],
            ['id' => 3, 'nombre' => 'Switches']
        ];
        $clases = [
            ['id' => 1, 'nombre' => 'Calculo 1'],
            ['id' => 2, 'nombre' => 'Redes 1'],
            ['id' => 3, 'nombre' => 'Lenguajes de Programacion']
        ];


        return view('coordinadorCrearSeccion', compact('salonesDisponibles', 'docentesDisponibles', 'equiposDisponibles', 'clases', 'edificios'));
    }

    public function guardarSeccion(Request $request){
        return view ('coordinador');
    }

    public function editarSeccion($idSeccion){
        //tambien recibe los datos
        $edificios = [
            ['id' => 1, 'nombre' => 'D1'],
            ['id' => 2, 'nombre' => 'B2'],
            ['id' => 3, 'nombre' => '1847']
        ];
        $salonesDisponibles = [
            ['id' => 1, 'nombre' => 'Salón A'],
            ['id' => 2, 'nombre' => 'Salón B'],
            ['id' => 3, 'nombre' => 'Salón C']
        ];

        $docentesDisponibles = [
            ['id' => 1, 'nombre' => 'Juan Pérez'],
            ['id' => 2, 'nombre' => 'María García'],
            ['id' => 3, 'nombre' => 'Carlos López']
        ];

        $equiposDisponibles = [
            ['id' => 1, 'nombre' => 'Data show'],
            ['id' => 2, 'nombre' => 'Routers'],
            ['id' => 3, 'nombre' => 'Switches']
        ];
        $clases = [
            ['id' => 1, 'nombre' => 'Calculo 1'],
            ['id' => 2, 'nombre' => 'Redes 1'],
            ['id' => 3, 'nombre' => 'Lenguajes de Programacion']
        ];

        //se recibe objeto seccion, mandar id al controller springboot y devolver seccion
        $seccion = [
        'idSeccion' => '1',
        'nombre' => 'Mecanica Cuantica',
        'horaInicio' => '07:00',
        'horaFin' => '08:00',
        'docente' => 'Javier Santaolalla',
        'edificio' => 'E1',
        'salon' => '301',
        ];
        return view('coordinadorEditarSeccion',compact('salonesDisponibles', 'docentesDisponibles', 'equiposDisponibles', 'clases', 'edificios', 'seccion'));
    }

    public function actualizarSeccion(Request $request, $idSeccion){
        return redirect()->route('coordinador.planificacion');
    }


}