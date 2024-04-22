<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <title>home</title>
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
          <a class="fw-light me-3" href=" {{ route('docente.perfil')}} ">Perfil</a>
          <button class="btn btn-danger me-3">
            <a class="text-white" href="{{ route('docente.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
</div>

<!-- Contenido principal -->
<div class="container">
    <div class="col">
      <div class="card text-center">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <h5 class="card-title mt-5">¡Bienvenido Docente!</h5>
              <p class="card-text mt-4">Sistema de gestión de matrícula</p>
            </div>  
            <div class="col-md-6">
              <div class="card-img">
                <img src="{{ asset('img/docenteHome.png') }}" alt="docenteHome" class="img-fluid"  width="200px">
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title mt-3">Clases</h5>
          <p class="card-text mt-3">Explora las clases asignadas</p>
          <a href="{{ route('docente.verClases') }}" class="btn btn-primary mt-3">Ir a Clases</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title mt-3">Historial</h5>
          <p class="card-text mt-3">Revisa tu historial de clases</p>
          <a href="{{route('docente.historial')}}" class="btn btn-primary mt-3">Ir a Historial</a>
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

</body>
</html>