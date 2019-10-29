@extends('masters.master-welcome')

@section('ofertas')

<div class="row">

  @php($iConta = 0)

  @foreach($aProduct_offering as $Product_offering)

  @if($iConta < 4)
  <div class="card-body col-sm-3 text-center">
    <a href="#"><img class="camiseta" src="{{$Product_offering->imgurl}}"></a>
    <br>
    <p><strong>{{$Product_offering->name}}</strong></p>
    <div style="text-decoration: line-through;">{{number_format($Product_offering->price, 2)}} €</div>
    <strong>{{number_format($Product_offering->price - ($Product_offering->price * ($Product_offering->discountPercent / 100)), 2)}}€ - {{$Product_offering->discountPercent}}% Dcto</strong>
  </div>
  @endif

  @php($iConta++)

  @endforeach

</div>

@endsection

@section('catalogo')

@php($iCont = 0)

@foreach($aProduct_new as $Product_new)

@if(($iCont % 4) == 0)
<div class="row">
  @endif

  @if($Product_new->HasDiscount())
  <div class="card-body col-sm-3 text-center">
    <a href="#"><img class="camiseta" src="{{$Product_new->imgurl}}"></a>
    <p><strong>{{$Product_new->name}}</strong></p>
    <strong>{{number_format($Product_new->price, 2)}} €</strong>
  </div>
  @else
  <div class="card-body col-sm-3 text-center">
    <a href="#"><img class="camiseta" src="{{$Product_new->imgurl}}"></a>
    <p><strong>{{$Product_new->name}}</strong></p>
    <div style="text-decoration: line-through;">{{number_format($Product_new->price, 2)}} €</div>
    <strong>{{number_format($Product_new->price - ($Product_new->price * ($Product_new->discountPercent / 100)),2)}}€ - {{$Product_new->discountPercent}}% Dcto</strong>
  </div>
  @endif

  @if(($iCont % 4) == 3)
</div>
@endif

@php ($iCont++ )

@endforeach

@while(($iCont % 4) != 0)
<div class="card-body col-sm-3 text-center">
  <img class="hueco">
</div>

@php ($iCont++ )
@endwhile

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