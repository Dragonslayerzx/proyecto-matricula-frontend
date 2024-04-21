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
          <a class="fw-light me-3" href="{{ route('coordinador.home')}}">Home</a>
          <button class="btn btn-danger me-3">
            <a class="text-white" href="{{ route('docente.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
</div>

<!-- Contenido principal -->
<h1 class="text-center"><b>Perfil de Docente</b></h1>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <h2 class="mt-5 text-center">Información del Docente</h2>
            <table class="table table-bordered mt-5" style="border-color: #a6b3bf;">
                <tbody>
                    <tr>
                        <th>Numero de cuenta</th>
                        <td>{{$usuario['cuenta']}}</td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td>{{$usuario['nombre']}}</td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td>{{$usuario['apellido']}}</td>
                    </tr>
                    <tr>
                        <th>Sexo</th>
                        <td>{{$usuario['sexo']}}</td>
                    </tr>
                    <tr>
                        <th>Direccion</th>
                        <td>{{$usuario['direccion']}}</td>
                    </tr>
                    <tr>
                        <th>Correo</th>
                        <td>{{$usuario['email']}}</td>
                    </tr>
                    <tr>
                        <th>Especializacion</th>
                        <td>{{$usuario['especializacion']}}</td>
                    </tr>
                    <tr>
                        <th>Cargo</th>
                        <td>Coordinador</td>
                    </tr>
                    <tr>
                        <th>Fecha de Contratacion</th>
                        <td>{{$usuario['fechaContrato']->format('Y-m-d')}}</td>
                    </tr>
                </tbody>
            </table>
            <!--
            <div class="mt-4 text-center">
              <a href="#" class="btn btn-warning">Cambio de clave</a>
            </div>
            -->
        </div>
        <div class="col-md-5 text-center">
            <h2 class="mt-5 text-center">Foto de Perfil</h2>
            <img src="{{ asset('img/beanhead.svg')}}" alt="fotoPerfil" class="img-fluid" style="margin-top: -7vh; max-width: 450px;">
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