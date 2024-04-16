<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>clases</title>
</head>
<body class="page mx-auto">

<!-- Barra de navegación -->
<div class="mb-4">
    <head>
      <nav class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div>
        <div class="d-flex align-items-center">
          <a class="fw-light me-3" href="{{ route('docente.perfil') }}">Perfil</a>
          <a class="fw-light me-3" href="{{ route('docente.home')}}">Home</a>
          <button class="btn btn-danger">
            <a class="me-3 text-white" href="{{ route('docente.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>    
</div>

<!-- Contenido Principal -->
<div class="container mt-3 text-center">
  <h1><b>Clases asignadas en el Periodo</b></h1>
</div>  

<table class="table mt-4">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Sección</th>
      <th>UV</th>
      <th>Ver Curso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>001</td>
      <td>Curso 1</td>
      <td>1500</td>
      <td>3</td>
      <td><a href="#" class="btn btn-primary">Ver</a></td>
    </tr>
    <tr>
      <td>002</td>
      <td>Curso 2</td>
      <td>1600</td>
      <td>4</td>
      <td><a href="#" class="btn btn-primary">Ver</a></td>
    </tr>
  </tbody>
</table>

<!-- Footer -->
<footer class="footer mt-5 py-3">
  <div class="container text-center">
    <span class="text-muted">© 2024 Tuition 03</span>
  </div>
</footer>

</body>
</html>