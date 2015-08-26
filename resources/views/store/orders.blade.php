@extends('store.store')

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="product-details"><!--product-details-->
            <h3>Meus pedidos</h3>

            <table class="table">
                <tbody>
                <tr>
                    <th>#ID</th>
                    <th>Itens</th>
                    <th>Valor</th>
                    <th>Status</th>
                </tr>

                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>
                            <ul>
                                @foreach($order->items as $item)
                                    <li>{{ $item->product->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>R$ {{ number_format($order->total,2,",",".") }}</td>
                        <td>{{ $order->status }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@stop