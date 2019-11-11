@extends('masters.master-welcome')

@section('ofertas')

<div class="row">
    <div class="card-body col-sm-4">
        <a href="/product/{{$product->id}}"><img class="camiseta" src="../{{$product->imgurl}}"></a>
    </div>

    <div class="card-body col-sm-8">
        <p>{{$product->id}}</p>
        <p><strong>{{$product->name}}</strong></p>
        <p>{{$product->price}} €</p>
        <p>{{$product->Company()}}</p>
        <p>{{$product->description}}</p>
        </div>
    </div>
</div>

@endsection

@section('sidebar')
<div class="card-body text-center">
  <a href="#"><img class="camven" src="img/cat9.jpg"></a>
  <strong>Camiseta Stranger Things</strong>
  <br>
  <strong>17.00 €</strong>
</div>
<div class="card-body text-center">
  <a href="#"><img class="camven" src="img/cat5.jpg"></a>
  <strong>Camiseta Great Ramen</strong>
  <br>
  <strong> 15.99 € </strong>
</div>
<div class="card-body text-center">
  <a href="#"><img class="camven" src="img/cat8.jpg"></a>
  <strong>Camiseta Link In Park</strong>
  <br>
  <strong> 20.00 € </strong>
</div>
<div class="card-body text-center">
  <a href="#"><img class="camven" src="img/cat10.jpg"></a>
  <strong>Camiseta Slytherin</strong>
  <br>
  <strong> 20.00 € </strong>
</div>
@endsection