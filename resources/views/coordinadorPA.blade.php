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
          <a class="fw-light me-3" href=" {{ route('docente.perfil') }} ">Perfil</a>
          <button class="btn btn-danger me-3">
            <a class="text-white" href="{{ route('docente.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
</div>

<!-- Contenido principal -->
<div class="container">
    <h2 class="text-center mb-3">Secciones Creadas</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Seccion ID</th>
                <th>Clase</th>
                <th>Hora de Inicio</th>
                <th>Hora de Finalización</th>
                <th>Docente</th>
                <th>Salón</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Matemáticas</td>
                <td>08:00 AM</td>
                <td>10:00 AM</td>
                <td>Profesor A</td>
                <td>Aula 101</td>
                <td><a href="#" class="btn btn-primary">Editar</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ciencias</td>
                <td>10:00 AM</td>
                <td>12:00 PM</td>
                <td>Profesor B</td>
                <td>Aula 102</td>
                <td><a href="#" class="btn btn-primary">Editar</a></td>
            </tr>
        </tbody>
    </table>
    <div class="mt-4">
        <a href="{{ route('coordinador.home') }}" class="btn btn-warning me-4">Volver</a>
        <a href="{{ route('coordinador.crear.seccion') }}" class="btn btn-primary">Crear Seccion</a>
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