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
          <a class="fw-light me-3" href="{{ route('docente.perfil') }}">Perfil</a>
          <button class="btn btn-danger me-3">
            <a class="text-white" href="{{ route('docente.logout') }}">Log out</a></button>
        </div>
      </nav>
    </head>
</div>

<!-- Contenido principal -->
<div class="container col-md-8">
    <h1>Crear Sección</h1>
    <form action="{{route('coordinador.guardar.seccion')}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="clase_id" class="form-label">Clase:</label>
            <select class="form-select" id="clase_id" name="clase_id">
                @foreach ($clases as $clase)
                    <option value="{{ $clase['id'] }}">{{ $clase['nombre'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="hora_inicio" class="form-label">Hora de Inicio:</label>
            <input type="time" class="form-control" id="hora_inicio" name="hora_inicio">
        </div>
        <div class="mb-3">
            <label for="hora_fin" class="form-label">Hora de Inicio:</label>
            <input type="time" class="form-control" id="hora_fin" name="hora_fin">
        </div>
        <div class="mb-3">
            <label for="docente_id" class="form-label">Docente:</label>
            <select class="form-select" id="docente_id" name="docente_id">
                @foreach ($docentesDisponibles as $docente)
                    <option value="{{ $docente['id'] }}">{{ $docente['nombre'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="edificio_id" class="form-label">Edificio:</label>
            <select class="form-select" id="edificio_id" name="edificio_id">
                @foreach ($edificios as $edificio)
                    <option value="{{ $edificio['id'] }}">{{ $edificio['nombre'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="salon_id" class="form-label">Salón:</label>
            <select class="form-select" id="salon_id" name="salon_id">
                @foreach ($salonesDisponibles as $salon)
                    <option value="{{ $salon['id'] }}">{{ $salon['nombre'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="equipos" class="form-label">Equipos:</label>
            @foreach ($equiposDisponibles as $equipo)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $equipo['id'] }}" id="equipo_{{ $equipo['id'] }}" name="equipos[]">
                    <label class="form-check-label" for="equipo_{{ $equipo['id'] }}">{{ $equipo['nombre'] }}</label>
                </div>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="nombre_seccion" class="form-label">Descripción(opcional):</label>
            <input type="text" class="form-control" id="nombre_seccion" name="nombre_seccion">
        </div>
        <a href="{{route('coordinador.planificacion')}}" class="btn btn-warning">Regresar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

<!-- Footer -->
<footer class="footer mt-5 py-3">
  <div class="container text-center">
    <span class="text-muted">© 2024 Tuition 03</span>
  </div>
</footer>

</body>
</html>