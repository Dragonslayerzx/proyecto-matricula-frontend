<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>login</title>
</head>
<body class="page mx-auto">
  <div class="mb-4">
    <head>
      <nav class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div>
        <div class="d-flex align-items-center">
          <!-- <a href="{{ route('crear.docente') }}">Crear registro docente</a> -->
          <a class="me-4" href="{{ route('establecer.matricula') }}">Establecer matrícula</a>
          <a class="me-4" href="{{ route('registrar.carrera') }}">Registrar carrera</a>
          <a class="me-4" href="{{ route('registrar.edificio') }}">Registrar edificio</a>
          <a class="me-4" href="{{ route('registrar.salon') }}">Registrar salón</a>
          <button class="btn btn-primary"><a class="me-3 text-white" href="{{ route('logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
  </div>
  <main class="d-flex flex-column justify-content-center align-items-center">
    <div class="mb-5">
      <h3>Expediente aplicante docente</h3>
    </div>
    <div class="w-50">
      <form action="#" method="post" class="form mb-5 d-flex flex-column p-8">
        @csrf
        @method('post')
        <div class="d-flex flex-column align-items-center justify-content-center my-2">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div>
        <input class="form-control mb-3" type="text" name="nombre" placeholder="Nombres">
        <input class="form-control mb-3" type="text" name="apellido" placeholder="Apellidos">
        <input class="form-control mb-3" type="text" name="correo" placeholder="Correo">
        <input class="form-control mb-3" type="text" name="especializacion" placeholder="Especializacion">
        <input class="form-control mb-3" type="password" name="contrasena" placeholder="Contraseña">
        <label for="carrera">Carrera</label>
        <select class="form-select mb-3" name="carrera" id="carrera" required>
          <option selected value="{{ $carrera }}">{{ $carrera }}</option>
        </select>
        <select name="sexo" class="form-select mb-3" >
          <option selected value="{{ $sexo }}">{{ $sexo }}</option>
        </select>
        <select name="departamento" class="form-select mb-3">
          <option selected value="{{ $departamento }}">{{ $departamento }}</option>
        </select>
        <div class="d-flex flex-column justify-content-center mb-3">
          <label for="cargo">Cargo</label>
          <input class="form-control" type="text" value="{{ $cargo }}" id="cargo">
        </div>
        <button class="btn btn-primary">Guardar</button>
        <!--TODO: agregar opcion para subir foto y mandarlo al server -->
      </form>
    </div>
  </main>
</body>