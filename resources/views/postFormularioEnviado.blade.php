<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>login</title>
</head>
<body class="page mx-auto">
  <head>
      <div>
      <nav class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="mt-3">Tuition<span class="text-orange">03</span></h3>
        <!-- <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo"> -->
        </div>
       <!-- <div class="d-flex align-items-center">
          <a class="me-3" href="{{ route('estudiante.login') }}">Estudiantes</a>
          <a class="me-3" href="{{ route('docente.login') }}">Docentes</a>
          <a class="me-3" href="{{ route('empleado.login') }}">Empleados</a>
          <a class="me-3" href="{{ route('estudiante.expediente.form') }}">registrate</a>
        </div> -->
      </nav>
    </div>
  </head>
  <main class="h-85 d-flex flex-column justify-content-center align-items-center mt-2">
    <section class="mb-3 d-flex aling-items-center justify-content-center">
      <div class="mb-4">
        <img src="{{ asset('img/formEnviado.png') }}" alt="illustration">
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center mb-3">
        <h3><span class="text-orange">GRACIAS</span> por enviar el formulario</h3>
        <h5 class="fw-light">El formulario ha sido enviado a registro para su revisión</h5>
      </div>
    </section>
    <section>
      <div class="mx-auto mb-3">
        <img src="{{ asset('img/thanks.gif') }}" alt="lottie agradecimiento">
      </div>
      <div class="mx-auto">
        <button class="btn btn-primary"><a class="text-white" href="{{ route('landing') }}">Ir a Inicio</a></button>
      </div>
    </section>
  </main>
</body>
</html>