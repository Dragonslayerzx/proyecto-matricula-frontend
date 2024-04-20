<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', [LandingController::class, 'landing'])->name('landing');

//empleado
Route::get('/empleado/login', [EmpleadoController::class, 'empleadoLogin'])->name('empleado.login');
Route::get('/empleado/home', [EmpleadoController::class, 'vistaPrincipalEmpleado'])->name('empleado.home');
Route::get('/registro/expediente/revisar/{id}', [EmpleadoController::class, 'expedienteRevisar'])->name('expediente.revisar');
Route::get('/registro/docente/crear', [EmpleadoController::class, 'crearDocente'])->name('crear.docente');
Route::get('/registro/matricula/establecer', [EmpleadoController::class, 'establecerMatricula'])->name('establecer.matricula');
Route::get('/empleado/logout', [EmpleadoController::class, 'logout'])->name('logout');
Route::get('/registrar/carrera', [EmpleadoController::class, 'registrarCarrera'])->name('registrar.carrera');
Route::get('/registrar/edificio', [EmpleadoController::class, 'registrarEdificio'])->name('registrar.edificio');
Route::get('/registrar/salon', [EmpleadoController::class, 'registrarSalon'])->name('registrar.salon');
Route::get('/registro/expediente/docente/revisar', [EmpleadoController::class, 'expedienteDocenteRevisar'])->name('expediente.docente.revisar');
// estudiantes
Route::get('/estudiante/login', [EstudianteController::class, 'estudianteLogin'])->name('estudiante.login');
Route::post('/estudiante/login/validar', [EstudianteController::class, 'verificarLogin'])->name('estudiante.verificar.login');
Route::get('/estudiante/expediente/form', [EstudianteController::class, 'expedienteEstudianteForm'])->name('estudiante.expediente.form');
Route::post('/expediente/mandar', [EstudianteController::class, 'mandarExpediente'])->name('expediente.mandar');
Route::get('/estudiante/formulario/enviado', [EstudianteController::class, 'formularioEnviado'])->name('formulario.enviado');
Route::get('/estudiante/home', [EstudianteController::class,'vistaPrincipalEstudiante'])->name('estudiante.home');
Route::get('/estudiante/logout', [EstudianteController::class, 'estudianteLogout'])->name('estudiante.logout');
Route::get('/estudiante/forma03', [EstudianteController::class,'verForma03'])->name('estudiante.forma03');
Route::get('/estudiante/perfil', [EstudianteController::class, 'estudiantePerfil'])->name('estudiante.perfil');
Route::get('/estudiante/perfil/editar', [EstudianteController::class, 'editarPerfil'])->name('estudiante.editar.perfil');
Route::put('/estudiante/perfil/cambiarClave', [EstudianteController::class, 'cambiarClave'])->name('estudiante.cambiar.clave');
Route::get('/estudiante/historial',[EstudianteController::class, 'verHistorial'])->name('estudiante.historial');
Route::get('/estudiante/matricula', [EstudianteController::class, 'verPaginaMatricula'])->name('estudiante.matricula');
// docente
Route::get('/docente/login', [DocenteController::class, 'docenteLogin'])->name('docente.login');
Route::get('/docente/home',  [DocenteController::class, 'vistaPrincipalDocente'])->name('docente.home');
Route::get('/docente/logout',[DocenteController::class, 'logout'])->name('docente.logout');
Route::get('/docente/clases',[DocenteController::class, 'verClases'])->name('docente.verClases');
Route::get('/docente/perfil',[DocenteController::class, 'docentePerfil'])->name('docente.perfil');
Route::get('/docente/perfil/editar', [DocenteController::class,'editarPerfil'])->name('docente.editar.perfil');
Route::put('/docente/perfil/cambiarClave', [DocenteController::class,'cambiarClave'])->name('docente.cambiar.clave');
Route::get('/docente/historial', [DocenteController::class, 'verHistorial'])->name('docente.historial');