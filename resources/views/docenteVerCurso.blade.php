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
          <button class="btn btn-danger me-4">
            <a class="text-white" href="{{ route('docente.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>    
</div>

<!-- Contenido Principal -->
<h1 class="mb-4 text-center">Evaluación de Sección {{$idSeccion}}</h1>

<!-- Lista de Alumnos -->
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Número de Cuenta</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno['numerocuenta'] }}</td>
                <td>{{ $alumno['nombre'] }}</td>
                <td>{{ $alumno['apellido'] }}</td>
                <td>{{ $alumno['correo'] }}</td>
                <td>{{ $alumno['direccion'] }}</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Asignar Nota</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Footer -->
<footer class="footer mt-5 py-3">
  <div class="container text-center">
    <span class="text-muted">© 2024 Tuition 03</span>
  </div>
</footer>

</body>
</html>