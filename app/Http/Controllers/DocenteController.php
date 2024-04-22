<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use DateTime;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function docenteLogin() {
        return view('docenteLogin');
    }

    public function verificarLoginDocente(Request $req) {
        $clave = $req->input('clave');
        $contrasena = $req->input('contrasena');

        $headers = ['Content-Type' => 'application/json'];
        $bodyData = [
            'clave' => $clave,
            'contrasena' => $contrasena
        ];
        $body = json_encode($bodyData);

        $client = new Client();
        $docenteLoginEndpoint = 'http://localhost:8080/api/matricula/docente/verificacion';
        $res = $client->post($docenteLoginEndpoint, [
            'headers' => $headers,
            'body' => $body
        ]);

        // si el login es correcto se debe traer al docente para saber si es coordinador
        if ($res) {
            $docentePorClaveEndpoint = 'http://localhost:8080/api/matricula/docente/' . $clave;
            $docenteRes = $client->get($docentePorClaveEndpoint);
            $docente = json_decode($docenteRes->getBody());
            if ($docente->coordinador)
                return view('coordinador', compact('docente'));

            return view('docente', compact('docente'));
        }
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

    //Coordinador
    public function cordiHome(){
        return view('coordinador');
    }

    public function cordiPlan(){
        return view ('coordinadorPA');
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

}
