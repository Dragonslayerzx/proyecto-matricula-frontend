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

// estudiantes
Route::get('/estudiante/login', [EstudianteController::class, 'estudianteLogin'])->name('estudiante.login');

// docente
Route::get('/docente/login', [DocenteController::class, 'docenteLogin'])->name('docente.login');