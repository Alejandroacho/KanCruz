<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kan Cruz</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/samplestylesheet.css') }}" rel="stylesheet">
</head>

<body>
  <header>
    <article>
      <img src="https://i.postimg.cc/zXBRX1M9/Untitled-1.jpg" class="header-logo">
    </article>
  <nav class="header-nav">
    <a class="nav-link active" href="{{route('booking.create')}}">Reserva</a>
      <a class="nav-link" href="#">Habitaciones</a>
      <a class="nav-link" href="#">Servicios</a>
      <a class="nav-link" href="#">Contacto</a>
  </nav>
    <!--
    <nav class="nav bg-dark justify-content-end">
      <a class="nav-link active" href="{{route('booking.create')}}">Reserva</a>
      <a class="nav-link" href="#">Habitaciones</a>
      <a class="nav-link" href="#">Servicios</a>
      <a class="nav-link" href="#">Contacto</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </nav>-->
  </header>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.postimg.cc/pdGhZ3YV/body-of-water-near-orange-and-green-leaf-trees-217120.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>First slide label</h1>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://i.postimg.cc/Pqrv1dDF/ancient-architecture-brick-brick-wall-277544.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
      <img src="https://i.postimg.cc/NfmXcJYb/mountains-nature-sky-vacation-130111.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!--
</div>
<div class="container">
    <h2>Nuestras habitaciones</h2>
<div class="row row-cols-1 row-cols-md-3">
    <div class="card">
        <img class="card-img" src="https://i.postimg.cc/xdXJsnfx/habiatci.jpg" alt="Card image">
        <div class="card-img-overlay">
            <p class="card-text">I'm text that has a background image!</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img" src="https://i.postimg.cc/xdXJsnfx/habiatci.jpg" alt="Card image">
        <div class="card-img-overlay">
            <p class="card-text">I'm text that has a background image!</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img" src="https://i.postimg.cc/xdXJsnfx/habiatci.jpg" alt="Card image">
        <div class="card-img-overlay">
            <p class="card-text">I'm text that has a background image!</p>
        </div>
    </div>-->
  <footer>
    <div class="caixa">
      <article>
        <img src="https://i.postimg.cc/zXBRX1M9/Untitled-1.jpg" class="header-logo">
      </article>
      <p class="text"> © Masia Can Cruz 2020 / Rights  belong to respective owners</p>
    </div> 

      <nav>
        <ul>
          <li>Condiciones</li>
          <li>Facebook <i class="fab fa-facebook-square"></i></li>
          <li>Instagram<i class="fab fa-instagram"></i></li>
          <li>Twitter<i class="fab fa-twitter-square"></i></li>
        </ul>
      </nav>  
  </footer>
</body>


