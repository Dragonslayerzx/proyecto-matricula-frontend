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
Route::get('/empleado/login/vista', [EmpleadoController::class, 'empleadoLogin'])->name('empleado.login');
Route::get('/empleado/home', [EmpleadoController::class, 'vistaPrincipalEmpleado'])->name('empleado.home');
Route::post('/empleado/login', [EmpleadoController::class, 'verificarEmpleadoLogin'])->name('empleado.login.verificar');
Route::get('/registro/expediente/revisar/{id}', [EmpleadoController::class, 'expedienteRevisar'])->name('expediente.revisar');
Route::get('/registro/docente/crear', [EmpleadoController::class, 'crearDocente'])->name('crear.docente');
Route::get('/registro/matricula/establecer', [EmpleadoController::class, 'establecerMatricula'])->name('establecer.matricula');
Route::post('/registro/establecer/matricular', [EmpleadoController::class, 'enviarDatosFechaMatricula'])->name('empleado.establecer.matricula');
Route::get('/empleado/logout', [EmpleadoController::class, 'logout'])->name('logout');
Route::get('/registrar/carrera', [EmpleadoController::class, 'registrarCarrera'])->name('registrar.carrera');
Route::post('/registro/carrera', [EmpleadoController::class, 'guardarCarrera'])->name('carrera.guardar');
Route::get('/registrar/edificio', [EmpleadoController::class, 'registrarEdificio'])->name('registrar.edificio');
Route::post('/registro/edificio', [EmpleadoController::class, 'guardarEdificio'])->name('edificio.guardar');
Route::get('/registrar/salon', [EmpleadoController::class, 'registrarSalon'])->name('registrar.salon');
Route::post('/registro/salon', [EmpleadoController::class, 'guardarSalon'])->name('salon.guardar');
Route::get('/registro/expediente/docente/revisar', [EmpleadoController::class, 'expedienteDocenteRevisar'])->name('expediente.docente.revisar');
Route::post('/registro/estudiante/guardar', [EmpleadoController::class, 'guardarEstudiante'])->name('crear.estudiante');
// estudiantes
Route::get('/estudiante/login', [EstudianteController::class, 'estudianteLogin'])->name('estudiante.login');
Route::post('/estudiante/login/validar', [EstudianteController::class, 'verificarLogin'])->name('estudiante.verificar.login');
Route::get('/estudiante/expediente/form', [EstudianteController::class, 'expedienteEstudianteForm'])->name('estudiante.expediente.form');
Route::post('/expediente/mandar', [EstudianteController::class, 'mandarExpediente'])->name('expediente.mandar');
Route::get('/estudiante/formulario/enviado', [EstudianteController::class, 'formularioEnviado'])->name('formulario.enviado');
Route::get('/estudiante/home', [EstudianteController::class,'vistaPrincipalEstudiante'])->name('estudiante.home');
Route::get('/estudiante/logout', [EstudianteController::class, 'estudianteLogout'])->name('estudiante.logout');
Route::get('/estudiante/forma03', [EstudianteController::class,'verForma03'])->name('estudiante.forma03');
Route::get('/estudiante/perfil/{id}', [EstudianteController::class, 'estudiantePerfil'])->name('estudiante.perfil');
Route::get('/estudiante/perfil/editar', [EstudianteController::class, 'editarPerfil'])->name('estudiante.editar.perfil');
Route::put('/estudiante/perfil/cambiarClave', [EstudianteController::class, 'cambiarClave'])->name('estudiante.cambiar.clave');
Route::get('/estudiante/historial',[EstudianteController::class, 'verHistorial'])->name('estudiante.historial');
Route::get('/estudiante/matricula/{id}', [EstudianteController::class, 'verPaginaMatricula'])->name('estudiante.matricula');
// docente
Route::get('/docente/login', [DocenteController::class, 'docenteLogin'])->name('docente.login');
Route::get('/docente/home',  [DocenteController::class, 'vistaPrincipalDocente'])->name('docente.home');
Route::get('/docente/logout',[DocenteController::class, 'logout'])->name('docente.logout');
Route::get('/docente/clases',[DocenteController::class, 'verClases'])->name('docente.verClases');
Route::get('/docente/vercurso/{idSeccion}',[DocenteController::class, 'verCurso'])->name('docente.ver.curso');
Route::get('/docente/perfil',[DocenteController::class, 'docentePerfil'])->name('docente.perfil');
Route::get('/docente/perfil/editar', [DocenteController::class,'editarPerfil'])->name('docente.editar.perfil');
Route::put('/docente/perfil/cambiarClave', [DocenteController::class,'cambiarClave'])->name('docente.cambiar.clave');
Route::get('/docente/historial', [DocenteController::class, 'verHistorial'])->name('docente.historial');
Route::post('/docente/verificar/login', [DocenteController::class, 'verificarLoginDocente'])->name('docente.login.verificar');
//docente (coordinador)
Route::get('coordinador/home', [DocenteController::class, 'cordiHome'])->name('coordinador.home');
Route::get('coordinador/perfil', [DocenteController::class, 'cordiPerfil'])->name('coordinador.perfil');
Route::get('coordinador/clases', [DocenteController::class, 'cordiClases'])->name('coordinador.clases');
Route::get('coordinador/vercurso/{idSeccion}', [DocenteController::class,'cordiVerCurso'])->name('coordinador.ver.curso');
Route::get('coordinador/planificacion', [DocenteController::class, 'cordiPlan'])->name('coordinador.planificacion');
Route::get('coordinador/seccion/crear', [DocenteController::class, 'crearSeccion'])->name('coordinador.crear.seccion');
Route::post('coordinador/seccion', [DocenteController::class,'guardarSeccion'])->name('coordinador.guardar.seccion');
Route::get('coordinador/seccion/editar/{idSeccion}', [DocenteController::class,'editarSeccion'])->name('coordinador.editar.seccion');
Route::put('coordinador/seccion/actualizar/{idSeccion}', [DocenteController::class,'actualizarSeccion'])->name('coordinador.actualizar.seccion');
Route::get('coordinador/historial', [DocenteController::class,'cordiHistorial'])->name('coordinador.historial');