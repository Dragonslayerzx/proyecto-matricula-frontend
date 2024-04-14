<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>landing</title>
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
  <main class="d-flex">
    <section>
      <div class="mt-7">
        <h1>Checa.</h1>
        <h1>Elige. Matricula.</h1>
      </div>
      <div class="mt-4">
        <h4 class="fw-light">Tuition<span class="text-orange">03</span> sistema de matrícula que ofrece la capacidad de revisar los perfiles de tus posibles docentes</h4>
      </div>
    </section>
    <section>
      <img src="{{ asset('img/loffie.gif') }}" alt="loffie art">
    </section>
  </main>
</body>
</html>