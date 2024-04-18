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
          <a class="fw-light me-3" href="{{ route('estudiante.home')}}">Home</a>
          <button class="btn btn-danger">
            <a class="me-3 text-white" href="{{ route('estudiante.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
</div>

<!-- Contenido principal -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4"><b>Cambio de Clave Estudiante</b></h2>
      <!--colocar action  -->
      <form action="{{route('estudiante.cambiar.clave')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label>Numero de cuenta:</label>
          <input type="text" class="form-control" name="nombre" value = "{{$alumno['cuenta']}}" readonly>
        </div>

        <div class="mb-3">
          <label for="claveActual">Clave Actual:</label>
          <input type="text" class="form-control" name="claveActual" id="claveActual" value = "{{$alumno['contrasena']}}">
        </div>
    
        <div class="mb-3">
          <label for="nuevaClave">Nueva clave:</label>
          <input type="text" class="form-control" name="nuevaClave" id="nuevaClave">
        </div>

        <div class="mb-3">
          <label for="nuevaClaveConfirm">Confirmar nueva clave:</label>
          <input type="text" class="form-control" name="nuevaClaveConfirm" id="nuevaClaveConfirm">
        </div>
        
        <a href="{{route('estudiante.perfil') }}" class="btn btn-warning">Volver</a>
        <button type="submit" class="btn btn-success">Cambiar clave</button>
      </form>
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