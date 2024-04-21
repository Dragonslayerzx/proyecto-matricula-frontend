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
  <div class="mb-4">
    <head>
      <nav class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
          <h3>Tuition<span class="text-orange">03</span></h3>
        </div>
        <div class="d-flex align-items-center">
          <button class="btn btn-primary"><a class="me-3 text-white" href="{{ route('logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
  </div>
  <main class="d-flex flex-column justify-content-center align-items-center">
    <div class="mb-5">
      <h3>Establecer matrícula</h3>
    </div>
    <div>
      <form action="{{ route('empleado.establecer.matricula') }}" method="post" class="form mb-5 d-flex flex-column p-8">
        @method('post')
        @csrf
        <label for="primer">Seleccione el día de comienzo</label>
        <input class="form-control mb-3" type="date" id="primer" name="primerDia" placeholder="Selecciona día de comienzo">
        <label for="ultimo">Selecione el último día</label>
        <input class="form-control mb-3" id="ultimo" type="date" name="ultimoDia" placeholder="Selecciona día final">
        <label for="horaComienzo">Seleccione hora de comienzo</label>
        <input class="form-control mb-3" type="time" id="horaComienzo" name="horaComienzo">
        <label for="horaFinal">Seleccione última hora de acceso</label>
        <input class="form-control mb-3" type="time" id="horaFinal" name="horaFinal">
        <label for="anio">Año académico</label>
        <input type="text" id="anio" class="form-control" placeholder="Año" name="anio">
        <label for="periodo">Periodo académico</label>
        <select name="periodo" id="periodo">
          <option selected>Periodo</option>
          <option value="I">I periodo</option>
          <option value="II">II periodo</option>
          <option value="III">III periodo</option>
        </select>
        <button class="btn btn-primary">Guardar</button>
        <!--TODO: agregar opcion para mandarlo al server -->
      </form>
    </div>
  </main>
</body>