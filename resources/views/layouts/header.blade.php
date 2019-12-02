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
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
      <a class="nav-link" href="/show/cart"><li class="nav-item"><div class="icon"></li></a>
      @if(session()->get('cart',null) != null || session()->get('cart')['iTotalItems'] > 0)
        <li class="nav-item number">{{session()->get('cart', null)->iTotalItems}}</li>
      @endif
   </ul>
  </div>
</nav>