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
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
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
  <main class="mt-4">
    <div>
      <h4>Expedientes Estudiantes</h4>
    </div>
    <div class="mb-5">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Carrera</th>
            <th scope="col">Revisar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($expedientes as $expediente)
            <tr>
              <th scope="row">{{ $expediente->idExpediente }}</th>
              <td>{{ $expediente->nombres }}</td>
              <td>{{ $expediente->apellidos }}</td>
              <td>{{ $expediente->carrera }}</td>
              <td><a href="{{ route('expediente.revisar',  $expediente->idExpediente) }}">Revisar</a></td>
            </tr>    
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
</body>