@extends('store.store')

@section('categories')
    @include('store.partial.categories')
@stop

@if (session('product_destroy'))
    <div class="alert alert-success">
        {{ session('product_destroy') }}
    </div>
@endif

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Produtos da Categoria - {{  $category->name }}</h2>
            @if(count($products))
                @include('store.partial.products', ['products' => $products])
            @else
                <div class="alert alert-warning">
                    Nenhum produto cadastrado.
                </div>
            @endif
        </div><!--features_items-->
    </div>
@stop