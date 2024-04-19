<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <title>Matricula</title>
</head>
<body class="page mx-auto">
  <head class="">
    <nav class="d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
        <h3>Tuition<span class="text-orange">03</span></h3>
      </div>
      <div class="d-flex align-items-center">
        <a class="fw-light me-3" href=" {{ route('estudiante.perfil')}} ">Perfil</a>
        <button class="btn btn-danger" onclick="logOut()">
        <a class="me-3 text-white" href="{{ route('estudiante.logout') }}">Log out</a></button>
      </div>
    </nav>
  </head>
  <main class="d-flex flex-column align-items-center mt-5">
    <div>
      <h3>Matricula tus clases!!</h3>
      <img src="{{ asset('img/matricula.gif') }}" alt="matricula lottie">
    </div>
    <section class="mb-5 w-100">
      <div class="d-flex justify-content-center">
        <div class="me-4">
          <select name="Carrera" id="carreras" class="form-select">
            <option selected>Carreras</option>
            @foreach ($carreras as $carrera)
              <option value="{{ $carrera }}">{{ $carrera }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-5">
          <select name="clases" id="clases" class="form-select">
            <option selected>Clases</option>
        {{--     @foreach ($clases as $clase)
              <option value="{{ $clase }}">{{ $clase }}</option>
            @endforeach --}} 
          </select>
        </div>
      </div>
      <div class="container">
        <div class="row" id="card-container">
          <!-- se deberian reendizar las secciones dependiendo de la clase seleccionada -->
        </div>
      </div>
    </section>
  </main>
  <script src="{{ asset('js/clases.js') }}"></script>
  <script src="{{ asset('js/loginEstudiante.js') }}"></script>
</body>
</html>