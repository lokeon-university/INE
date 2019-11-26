@extends('masters.master-welcome')

@section('ofertas')

<div class="card-body table">
    <div class="row">
        <div class="col-sm-2 text-center  atribute">
            <strong>Código del artículo</strong>
        </div>
        <div class="col-sm-2 text-center atribute">
            <strong>Imagen</strong>
        </div>
        <div class="col-sm-2 text-center atribute">
            <strong>Título</strong>
        </div>
        <div class="col-sm-2 text-center atribute">
            <strong>Precio</strong>
        </div>
        <div class="col-sm-2 text-center atribute">
            <strong>Cantidad</strong>
        </div>
    </div>

    @php($cart = session()->get('cart', null))

    @foreach($cart->aItem as $aItem)
    <div class="row article">
        <div class="col-sm-2 text-center data">
            <strong>{{$aItem['id']}}</strong>
        </div>
        <div class="col-sm-2 text-center data">
            <a href="/product/{{$aItem['id']}}"><img class="camiseta-view" src="/{{$aItem['imgurl']}}"></a>
        </div>
        <div class="col-sm-2 text-center data">
            <strong>{{$aItem['name']}}</strong>
        </div>
        <div class="col-sm-2 text-center data">
            <strong>{{number_format($aItem['price'], 2)}} €</strong>
        </div>
        <div class="col-sm-2 text-center data">
            <strong> [<a href="{{ route('cart.operation',[ 'operation' => 'add', 'product' => $aItem['id']])}}" type="submit" class="btn btn-link">+</a>]
                {{$aItem['amountItem']}}
                [<a href="{{ route('cart.operation',[ 'operation' => 'remove', 'product' => $aItem['id']]) }}" type="submit" class="btn btn-link">-</a>]</strong>
            <span></span>
            <a href="{{ route('cart.operation',[ 'operation' => 'removeAll', 'product' => $aItem['id']]) }}" type="submit" class="btn btn-danger">Eliminar del carro</a>
        </div>
    </div>
    @endforeach

    <div class="row article">
        <div class="col-sm-2 text-center data"></div>
        <div class="col-sm-2 text-center data"></div>
        <div class="col-sm-2 text-center data"></div>
        <div class="col-sm-2 text-center data">
            <strong>Total: {{number_format($cart->dTotalPrice, 2)}} €</strong>
        </div>
        <div class="col-sm-2 text-center data">
            <strong>Productos: {{$cart->iTotalItems}}</strong>
        </div>
    </div>
</div>

@endsection