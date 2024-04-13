<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function empleadoLogin() {
        return view('empleado');
    }
}
