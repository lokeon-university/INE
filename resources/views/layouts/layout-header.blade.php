<nav class="navbar navbar-expand-sm">
  <a class="navbar-brand" href="/"><strong>UCAmisetas</strong></a>
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
      <a class="nav-link" href="/show/cart"><li class="nav-item"><div class="icon"></li></a>
      @if(session()->get('cart',null) != null || session()->get('cart')['iTotalItems'] > 0)
        <li class="nav-item number">{{session()->get('cart', null)->iTotalItems}}</li>
      @endif
   </ul>
  </div>
</nav>