@extends('store.store')

@section('categories')
    @include('store.partial.categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Produtos da Categoria - </h2>

            @include('store.partial.products')
        </div><!--features_items-->

    </div>
@stop