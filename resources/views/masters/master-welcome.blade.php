<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css" />

  <style>
   /* LINK STYLE */

    a {
      color: darkgreen;
    }

    a:hover {
      color: limegreen;
    }

    /* BUTTON STYLE */

    .btn-primary {
      background-color: darkgreen;
      border-color: darkgreen;
    }

    .btn-primary:hover {
      background-color: limegreen;
      border-color: limegreen;
    }

    /* FOOTER STYLE */

    footer {
      background-color: whitesmoke;
      bottom: 0px;
      height: auto;
      width:100%;
      padding-left: 0px;
      padding-right: 0px;      
    }

    /* ICON STYLE */

    .icon {
      background-image: url(/ico/carro32.png);
      background-repeat: no-repeat;
      height: 32px;
      width: 32px;
      margin-top: -10px;
    }

    .icon:hover {
      background-image: url(/ico/carrol32.png);
      background-repeat: no-repeat;
      height: 32px;
      width: 32px;
      margin-top: -10px;
    }

    /* IMAGE STYLE */

    img.camiseta {
      box-shadow: 4px 4px 5px grey;
      height: auto;
      width: 100%;
    }

    img.camven {
      box-shadow: 4px 4px 5px grey;
      height: auto;
      width: 80%;
    }

    /* INPUT STYLE */

    input.form-inline {
      margin-right: 5px;
    }

    /* NAV-ITEM STYLE */

    li.nav-item {
      margin-left: 10px;
      margin-right: 10px;
    }

    /* NAVBAR STYLE */

    nav.navbar {
      background-color: whitesmoke;
    }

    /* VENTAS STYLE */

    .ventas {
      background-color: whitesmoke;
      border-color: black;
      box-shadow: 4px 4px 5px grey;
      height: 100%;
      width: auto;
    }

    /* HUECO STYLE */

    img.hueco {
      height: 342;
      width: 285;
    }

    .number {
      font-weight: bold;
      color: darkgreen;
      margin: auto;
    }

  </style>

  <title>UCAmisetas</title>
</head>

<body>
  @include('layouts.layout-header')

  <div class="container-fluid" style="margin-top:30px">
    <div class="row">
      <!-- CENTER -->
      <div class="col-sm-10">
        <!-- OFERTAS -->
        @yield('ofertas')

        <br>
        
        <!-- CATÁLOGO -->
        @yield('catalogo')

      </div>

      <!-- SIDEBAR -->
      @yield('sidebar')

    </div>
  </div>

  @include('layouts.layout-footer')

  <!-- JAVASCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"')>
  </script>
  <!-- <script src="js/popper.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>