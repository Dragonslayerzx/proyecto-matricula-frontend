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
          <button class="btn btn-danger me-3">
            <a class="text-white" href="{{ route('estudiante.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
</div>

<!-- Contenido principal -->
<div class="container">
        <h2 class="text-center">Historial Academico Alumno</h2> 
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Clase</th>
                    <th>UV</th>
                    <th>Seccion</th>
                    <th>Periodo</th>
                    <th>Año</th>
                    <th>Nota</th>
                    <th>OBS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Matemáticas</td>
                    <td>5</td>
                    <td>1700</td>
                    <td>3</td>
                    <td>2023</td>
                    <td>65</td>
                    <td>APB</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Spanglish</td>
                    <td>3</td>
                    <td>1500</td>
                    <td>3</td>
                    <td>2023</td>
                    <td>65</td>
                    <td>APB</td>
                </tr>
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