@extends('store.store')

@section('categories')
    @include('store.partial.categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Produtos da Categoria - {{  $category->name }}</h2>
            @if(count($pCategory))
                @include('store.partial.products')
            @else
                <div class="alert alert-warning">
                    Nenhum produto cadastrado.
                </div>
            @endif
        </div><!--features_items-->
    </div>
@stop