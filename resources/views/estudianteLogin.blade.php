<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>Login</title>
</head>
<body class="page mx-auto">
  <div>
    <head>
      <nav class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div>
        <div class="d-flex align-items-center">
          <a class="me-3" href="{{ route('estudiante.login') }}">Estudiantes</a>
          <a class="me-3" href="{{ route('docente.login') }}">Docentes</a>
          <a class="me-3" href="{{ route('empleado.login') }}">Empleados</a>
          <a class="me-3" href="{{ route('estudiante.expediente.form') }}">registrate</a>
        </div>
      </nav>
    </head>
  </div>
  <main class="d-flex  justify-content-center align-items-center mt-2">
    <section class="me-5">
      <img src="{{ asset('img/authentication-small.png') }}" alt="autenticación logo">
    </section>
    <section class="d-flex">
      <form action="{{ route('estudiante.verificar.login') }}" method="post" class="d-flex flex-column justify-content-evenly p-5 form">
        @method('post')
        @csrf
        <div class="d-flex flex-column align-items-center justify-content-center">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div> 
        <input class="form-control mb-3" type="text" placeholder="Numero de cuenta" id="correo" name="numeroCuenta">
        <input class="form-control mb-3" type="password" placeholder="contraseña" id="passw" name="contrasena">
        <button class="btn btn-primary mb-3" id="btnUserLog">Entrar</button>
        <div>
          <h6 class="fw-light">No tienes cuenta <a href="{{ route('estudiante.expediente.form') }}">registrate</a></h6>
        </div>
      </form> 
    </section>
  </main>
 <!-- <script src="{{ asset("js/loginEstudiante.js") }}"></script> -->
</body>
</html>