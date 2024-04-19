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
          <a class="fw-light me-3" href="{{ route('estudiante.perfil') }}">Perfil</a>
          <a class="fw-light me-3" href="{{ route('estudiante.home')}}">Home</a>
          <button class="btn btn-danger" onclick="logOut()">
            <a class="me-3 text-white" href="{{ route('estudiante.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>    
</div>

<!-- Contenido Principal -->
<div class="container mt-3 mb-5 text-center">
  <h3>Clases asignadas</h3>
</div>  
<div class="container radius">
  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-5 rounded" style="width: 18rem;">
        <img src="{{ asset('img/clases.png') }}" class="card-img-top" alt="clases logo">
        <div class="card-body">
          <h3 class="card-title fw-light">NOMBRE DE CLASE</h3>
          <h6>Código: <span class="fw-bold">001</span></h6>
          <h6>Sección: <span class="fw-bold">1300</span></h6>
          <h6>UV: <span class="fw-bold">3</span></h6>
          <button class="btn btn-primary"><a class="text-white" href="#" class="btn btn-primary">Ver curso</a></button>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card mb-5 rounded" style="width: 18rem;">
        <img src="{{ asset('img/clases.png') }}" class="card-img-top" alt="clases logo">
        <div class="card-body">
          <h3 class="card-title fw-light">NOMBRE DE CLASE</h3>
          <h6>Código: <span class="fw-bold">001</span></h6>
          <h6>Sección: <span class="fw-bold">1300</span></h6>
          <h6>UV: <span class="fw-bold">3</span></h6>
          <button class="btn btn-primary"><a class="text-white" href="#" class="btn btn-primary">Ver curso</a></button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer mt-5 py-3">
  <div class="container text-center">
    <span class="text-muted">© 2024 Tuition 03</span>
  </div>
</footer>

<script src="{{ asset("js/loginEstudiante.js") }}"></script>
</body>
</html>