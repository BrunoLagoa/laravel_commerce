@extends('store.store')

@section('categories')
    @include('store.partial.categories')
@stop

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            @if (session('category_exist'))
                <div class="alert alert-danger">
                    {{ session('category_exist') }}
                </div>
            @endif
            <h2 class="title text-center">Em destaque</h2>

            @include('store.partial.products', ['products' => $pFeatured])

        </div><!--features_items-->

        <div class="features_items"><!--recommended-->
            <h2 class="title text-center">Recomendados</h2>

            @include('store.partial.products', ['products' => $pRecommend])

        </div><!--recommended-->

    </div>
@stop