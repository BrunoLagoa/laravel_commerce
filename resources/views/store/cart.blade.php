@extends('store.store')

@section('content')
    <section id="cart_items">
        <div class="container">

            <div class="table-condensed cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Descrição</td>
                        <td class="price">Valor</td>
                        <td class="price">Quantidade</td>
                        <td class="price">Total</td>
                        <td></td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($cart->all() as $k=>$item)
                        <tr>
                            <td class="cart_product">
                                <a href="{{ route('store.product', ['id'=>$k]) }}">
                                    Imegem
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="{{ route('store.product', ['id'=>$k]) }}">{{ $item['name'] }}</a></h4>
                                <p>Código: {{ $k }}</p>
                            </td>
                            <td class="cart_price">
                                R$ {{ number_format($item['price'],2,",",".") }}
                            </td>
                            <td class="cart_quantity">
                                {{ $item['qtd'] }}
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">R$ {{ number_format($item['price'] * $item['qtd'],2,",",".") }}</p>
                            </td>
                            <td class="cart_delete">
                                <a href="#" class="cart_quantity_delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@stop