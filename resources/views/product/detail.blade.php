@extends('masters.master-welcome')

@section('ofertas')

<div class="row" style="margin-top: 3.8%; margin-bottom: 5%;">
    <div class="card-body col-sm-4"></div>
    <div class="card-body col-sm-3">
        <a href="/product/{{$product->id}}"><img class="camiseta" src="../{{$product->imgurl}}"></a>
    </div>

    <div class="card-body col-sm-3">
        <p>
            <h2>{{$product->name}}</h2>
        </p>
        <hr style="border-width: 2px;">
        <p>
            <h6><strong style="color: green;">Código del artículo:</strong> {{$product->id}}</h6>
        </p>
        <p><strong style="color: green; font-size: 18px;">Precio:</strong>

            @if($product->HasDiscount())
            <strong style="font-size: 24px;">{{number_format($product->price - ($product->price * ($product->discountPercent / 100)),2)}} €</strong>
            <span style="text-decoration: line-through; font-size: 18px">{{number_format($product->price, 2)}} €</span> - {{$product->discountPercent}}% Dcto
            @else
            <strong style="font-size: 24px;">{{number_format($product->price, 2)}} €</strong>
            @endif
        </p>
        <p><span style="font-size: 18px;"><strong style="color: green;">Compañía:</strong> {{$product->Company()}}</span></p>
        <p><span style="font-size: 18px;"><strong style="color: green;">Descripción:</strong>
                <br>
                {{$product->description}}
            </span></p>
        <br>
        <div class="text-center" style="margin-bottom: 10px">
            <a href="{{route('cart.add',$product->id)}}"><button type="submit" class="btn btn-primary">Añadir al carro</button></a>
        </div>
    </div>
</div>
<div class="card-body col-sm-1"></div>
</div>
@endsection