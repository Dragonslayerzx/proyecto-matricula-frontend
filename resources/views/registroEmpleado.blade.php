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
          <h6 class="fw-light me-3">Usuario</h6>
          <h6 class="fw-light me-3">Correo</h6>
          <button class="btn btn-primary"><a class="me-3 text-white" href="{{ route('logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
  </div>
  <main class="mt-4">
    <div>
      <h4>Expedientes pendientes por revisar</h4>
    </div>
    <div>
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
          <tr>
            <th scope="row">1</th>
            <td>Carlos</td>
            <td>Flores</td>
            <td>Ing. Sistemas</td>
            <td><a href="{{ route('expediente.revisar') }}">Revisar</a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>Ing. Industrial</td>
            <td><a href="{{ route('expediente.revisar') }}">Revisar</a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>McCarthy</td>
            <td>Física</td>
            <td><a href="{{ route('expediente.revisar') }}">Revisar</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
      <button class="btn btn-primary me-5"><a class="text-white" href="{{ route('crear.docente') }}">Crear registro docente</a></button>
      <button class="btn btn-primary"><a class="text-white" href="{{ route('establecer.matricula') }}">Establecer matrícula</a></button>
    </div>
  </main>
</body>