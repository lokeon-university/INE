@extends('masters.master-welcome')

@section('ofertas')

@foreach($aProduct_offering as $Product_offering)

<div class="row">
  <div class="card-body col-sm-3 text-center">
    <a href="#"><img class="camiseta" src="{{$Product_offering->imgurl}}"></a>
    <br>
    <p><strong>{{$Product_offering->name}}</strong></p>
    <div style="text-decoration: line-through;">{{$Product_offering->price}}€</div>
    <strong>{{$Product_offering->price * ($Product_offering->discountPercent / 100)}}€  - {{$Product_offering->discountPercent}}% Dcto</strong>
  </div>
</div>

<!-- <div class="row">
  <div class="card-body col-sm-3 text-center">
    <a href="#"><img class="camiseta" src="img/cam1.jpg"></a>
    <br>
    <p><strong>Camiseta Neo Tokyo</strong></p>
    <div style="text-decoration: line-through;">19'00 €</div>
    <strong>13'99 € - 26% Dcto.!</strong>
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

<br> -->

@endforeach

@endsection

@section('catalogo')

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
@endsection

@section('sidebar')
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
@endsection