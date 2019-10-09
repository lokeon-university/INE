<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <style>
    .jumbotron {
      /*background-image: url("img/port.jpg");*/
      background-size: 100%;
    }

    .icon {
      background-image: url(ico/carro32.ico);
      background-size: 120%;
    }

    .icon:hover {
      background-image: url(ico/carrol32.ico);
    }


    img.camiseta {
      height: 40%;
      width: auto;
      box-shadow: 4px 4px 5px grey;
    }
  </style>

  <title>UCAmisetas</title>
</head>

<body>

  <!-- LAYOUT: HEADER -->

  <!-- SECTION: Title -->
  <div class="jumbotron text-center">
    <h1>UCAmisetas</h1>
  </div>

  <!-- SECTION: Main menu -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Removing navbar-expand-sm shows this as a collapsed menu -->
    <a class="navbar-brand" href="#">Barra de navegación</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="#">Camisetas</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Ofertas</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Lo último</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#">Autentificación</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><div class="icon responsive"></a></li>
      </ul>
    </div>
  </nav>

  <!-- LAYOUT: CENTER -->
  <div class="container-fluid" style="margin-top:30px">
    <div class="row">

      <!-- BLOCK: LEFT -->
      <div class="col-sm-3">
        <!-- col-sm-3 means three out of twelve columns -->
        <!-- SECTION: Some links -->
        <h3>Categorías</h3>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item"><a class="nav-link active" href="#">Todas</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Hombre</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Mujer</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Joven</a></li>
        </ul>
        <hr class="d-sm-none" /> <!-- d-sm-none means that the element will show only when the screen is small -->
      </div>

      <!-- BLOCK: CENTER -->
      <div class="col-sm-7">
        <!-- col-sm-7 means seven out of twelve columns -->
        <!-- SECTION: Entries -->
        <div class="card-body text-center">
          <h2>Últimas oportunidades</h2>
          <h5>¡Corre, que vuelan!</h5>
        </div>

        <div class="row">
          <div class="card-body col-sm-4 text-center">
            <img class="camiseta" src="img/cam1.jpg">
            <br>
            <p>Camiseta Neo Tokyo</p>
            <strong> 19'00 € </strong>
          </div>
          <div class="card-body col-sm-4 text-center">
            <img class="camiseta" src="img/cam2.jpg">
            <br>
            <p>Camiseta Roll Iniciative</p>
            <strong> 15'99 € </strong>
          </div>
          <div class="card-body col-sm-4 text-center">
            <img class="camiseta" src="img/cam3.jpg">
            <br>
            <p>Camiseta Bounty Hunter</p>
            <strong> 17'99 € </strong>
          </div>
        </div>
        <br>
        <br>
        <div class="card-body text-center">
          <h2>Catálogo</h2>
          <h5>Nuestras camisetas</h5>
        </div>
        <div class="row">
          <div class="card-body col-sm-4 text-center">
            <img class="camiseta" src="img/cat1.jpg">
            <p>Camiseta Schwifty</p>
            <strong> 19'00 € </strong>
          </div>
          <div class="col-sm-4 text-center">
            <img class="camiseta" src="img/cat2.jpg">
            <p>Camiseta Burn the City</p>
            <strong> 15'99 € </strong>
          </div>
          <div class="col-sm-4 text-center">
            <img class="camiseta" src="img/cat3.jpg">
            <p>Camiseta Lok'tar Ogar</p>
            <strong> 17'99 € </strong>
          </div>
          <div class="row">
            <div class="col-sm-4 text-center">
              <img class="camiseta" src="img/cat4.jpg">
              <p>Camiseta Cthulhu</p>
              <strong> 19'00 € </strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="camiseta" src="img/cat5.jpg">
              <p>Camiseta Great Ramen</p>
              <strong> 15'99 € </strong>
            </div>
            <div class="col-sm-4 text-center">
              <img class="camiseta" src="img/cat6.jpg">
              <p>Camiseta No Internet</p>
              <strong> 17'99 € </strong>
            </div>
          </div>
        </div>

        <!-- BLOCK: RIGHT -->
        <div class="col-sm-2 sidenav">
          <!-- col-sm-2 means two out of twelve columns -->
          <!-- SECTION: Cards -->
          <h2>Cards</h2>
          <!-- Style are directly included in the style attribute just for illustrative reasons. -->
          <!-- However, including them in <style> or in a CSS file is a better practice. -->
          <div class="card card-body bg-faded" style="background-color: #0ff; margin-bottom:15px;">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">Text of card 1.</p>
            <a href="#" class="btn btn-primary">This is a Button</a>
          </div>
          <div class="card card-body bg-light" style="margin-bottom:15px;">
            <h4 class="card-title">Card 2</h4>
            <div class="fakeimg">Fake card 2 image</div>
            <p class="card-text">Text of card 2.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- LAYOUT: FOOTER -->
    <div class="jumbotron text-center" style="margin-bottom:0;padding:20px">
      <div class="col-sm-4">

      </div>
    </div>

    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>')</script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>