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
  <div>
    <head>
      <nav class="d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
        <h3 class="mt-3">Tuition<span class="text-orange">03</span></h3>
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
       <!-- <div class="d-flex align-items-center">
          <a class="me-3" href="{{ route('estudiante.login') }}">Estudiantes</a>
          <a class="me-3" href="{{ route('docente.login') }}">Docentes</a>
          <a class="me-3" href="{{ route('empleado.login') }}">Empleados</a>
          <a class="me-3" href="{{ route('estudiante.expediente.form') }}">registrate</a>
        </div> -->
      </nav>
    </head>
  </div>
  <main class="d-flex flex-column justify-content-center align-items-center mt-2">
    <section class="mb-5">
      <h3>Registro de Salón</h3>
    </section>
    <section class="d-flex mb-3">
      <form action="{{ route('salon.guardar') }}" method="post" class="d-flex flex-column justify-content-around p-8 form">
        @csrf
        @method('post')
        <div class="d-flex flex-column align-items-center justify-content-center my-2">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div> 
        <div class="d-flex flex-column justify-content-center">
          <label class="form-label" for="salon">Salon</label>
          <input class="form-control mb-4" type="text" id="salon" name="nombreSalon" placeholder="Nombre del salón">
          <label class="form-label" for="capacidad">Capacidad</label>
          <input class="form-control mb-4" type="number" name="capacidadSalon" id="capacidad" placeholder="Capacidad del salón" min="0">
          <label class="form-label" for="edificio">Seleccione el edificio al que pertenece</label>
          <select class="form-select mb-5" name="edificio" id="edificio">
            <option selected>Edificio</option>
            @foreach ($edificios as $edificio)
              <option value="{{ $edificio->idEdificio }}">{{ $edificio->nombre }}</option> 
            @endforeach
          </select>
          <div>

          </div>
        </div>
        <div class="d-flex justify-content-center align-items-center">
          <button class="btn btn-primary me-3">Crear</button>
        </div>
      </form> 
    </section>
    <div class="mx-auto mb-5 d-flex justify-content-center">
      <button class="btn btn-primary"><a class="me-3 text-white" href="{{ route('empleado.home') }}">Ir a HOME</a></button>
    </div>
   <!-- <section class="ms-1">
      <img src="{{ asset('img/docente.png') }}" alt="autenticación logo">
    </section> -->
  </main>
</body>
</html>