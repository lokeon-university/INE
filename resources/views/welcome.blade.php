<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />

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
      background-image: url(ico/carro32.png);
      background-repeat: no-repeat;
      height: 32px;
      width: 32px;
      margin-top: -10px;
    }

    .icon:hover {
      background-image: url(ico/carrol32.png);
      background-repeat: no-repeat;
      height: 32px;
      width: 32px;
      margin-top: -10px;
    }

    /* IMAGE STYLE */

    img.camiseta {
      box-shadow: 4px 4px 5px grey;
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
  </style>

  <title>UCAmisetas</title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="#"><strong>UCAmisetas</strong></a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">

      <!-- IZQUIERDA -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="#">Categorías</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Lo último</a></li>
        <input type="text" class="form-inline" placeholder="Buscar">
        <button type="submit" class="btn btn-primary">Buscar</button>
      </ul>

      <!-- DERECHA -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#">Autenticación</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><div class="icon"></a></li>
      </ul>
    </div>
  </nav>

  <!-- CENTRO -->
  <div class="container-fluid" style="margin-top:30px">
    <div class="row">

      <!-- OFERTAS -->
      <div class="col-sm-10">
        <div class="card-body">
          <div class="text-center">
            <h2>Ofertas del día</h2>
          </div>
          <div class="text-center" style="color: green;">
            <h5>¡Corre, que vuelan!</h5>
          </div>
        </div>

        <div class="row">
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cam1.jpg"></a>
            <br>
            <p><strong>Camiseta Neo Tokyo</strong></p>
            <div style="text-decoration: line-through;">19'00 €</div>
            <strong>13'99 €  - 26% Dcto.!</strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cam2.jpg"></a>
            <br>
            <p><strong>Camiseta Roll Iniciative</strong></p>
            <div style="text-decoration: line-through;">15'99 €</div>
            <strong>10'00 € - 37% Dcto.!</strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cam3.jpg"></a>
            <br>
            <p><strong>Camiseta Bounty Hunter</strong></p>
            <div style="text-decoration: line-through;">17'99 €</div>
            <strong>15'00 € - 17% Dcto.!</strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cam4.jpg"></a>
            <br>
            <p><strong>Camiseta Rawr</strong></p>
            <div style="text-decoration: line-through;">13'99 €</div>
            <strong>9'99 € - 29% Dcto.!</strong>
          </div>
        </div>
      
        <br>

        <!-- CATÁLOGO -->
        <div class="card-body">
          <div class="text-center">
            <h2>Catálogo</h2>
          </div>
          <div class="text-center" style="color: green;">
            <h5>Nuestras camisetas</h5>
          </div>
        </div>

        <div class="row">
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat1.jpg"></a>
            <p><strong>Camiseta Schwifty</strong></p>
            <strong>19'99 €</strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat2.jpg"></a>
            <p><strong>Camiseta Burn the City</strong></p>
            <strong>24'99 €</strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat3.jpg"></a>
            <p><strong>Camiseta Lok'tar Ogar</strong></p>
            <strong>17'99 €</strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat4.jpg"></a>
            <p><strong>Camiseta Cthulhu</strong></p>
            <strong> 19'00 € </strong>
          </div>
        </div>

        <div class="row">
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat5.jpg"></a>
            <p><strong>Camiseta Great Ramen</strong></p>
            <strong> 15'99 € </strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat6.jpg"></a>
            <p><strong>Camiseta No Internet</strong></p>
            <strong> 17'99 € </strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat7.jpg"></a>
            <p><strong>Camiseta Skynet</strong></p>
            <strong> 22'00 € </strong>
          </div>
          <div class="card-body col-sm-3 text-center">
            <a href="#"><img class="camiseta" src="img/cat8.jpg"></a>
            <p><strong>Camiseta Link In Park</strong></p>
            <strong> 20'00 € </strong>
          </div>
        </div>
        <div class="text-center" style="margin-bottom: 10px">
        <button type="submit" class="btn btn-primary">Ver más camisetas</button>
        </div>
      </div>

      <!-- LO MÁS VENDIDO -->
      <div class="card-body col-sm-2 text-center ventas">
        <h2>Lo más vendido</h2>
        <div class="card-body text-center">
          <a href="#"><img class="camven" src="img/cat9.jpg"></a>
          <strong>Camiseta Stranger Things</strong>
          <br>
          <strong>17'00 €</strong>
        </div>
        <div class="card-body text-center">
          <a href="#"><img class="camven" src="img/cat5.jpg"></a>
          <strong>Camiseta Great Ramen</strong>
          <br>
          <strong> 15'99 € </strong>
        </div>
        <div class="card-body text-center">
          <a href="#"><img class="camven" src="img/cat8.jpg"></a>
          <strong>Camiseta Link In Park</strong>
          <br>
          <strong> 20'00 € </strong>
        </div>
        <div class="card-body text-center">
          <a href="#"><img class="camven" src="img/cat10.jpg"></a>
          <strong>Camiseta Slytherin</strong>
          <br>
          <strong> 20'00 € </strong>
        </div>
        <button type="submit" class="btn btn-primary">Ver más camisetas</button>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Acerca de</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Quiénes somos</a></li>
            <li><a href="#!">Trabaja con nosotros</a></li>
            <li><a href="#!">Aviso legal</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Navegación</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Idiomas / Languages</a></li>
            <li><a href="#!">Mapa del sitio</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Ayuda</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Gestionar compras</a></li>
            <li><a href="#!">Tarifas y políticas de envío</a></li>
            <li><a href="#!">Devolver o reemplazar productos</a></li>
            <li><a href="#!">Contacto para ayuda</a></li>
            <li><a href="#!">IVA sobre los bienes</a></li>
            <li><a href="#!">Métodos de pago</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
          <h5 class="text-uppercase">Contacto</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Atención al cliente</a></li>
            <li><a href="#!">Twitter</a></li>
            <li><a href="#!">Facebook</a></li>
            <li><a href="#!">YouTube</a></li>
            <li><a href="#!">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- JAVASCRIPTS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"')>
  </script>
  <!-- <script src="js/popper.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>