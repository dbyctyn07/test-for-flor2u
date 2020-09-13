@extends('admin.layouts.app')
@section('content')

    <h3>Заказы</h3>
    <br>

    {{ $orders->links("pagination::bootstrap-4") }}

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>партнер</th>
                    <th>общая сумма</th>
                    <th>состав</th>
                    <th>статус</th>
                    {{--<th>e-mail клиента</th>
                    <th>дата создания</th>--}}
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td><a href="{{ route("admin.order.edit", ['order' => $order->id ]) }}">{{ $order->id }}</a></td>
                    <td>{{--{{ $order->partner->id }}--}}{{ $order->partner->name }}</td>
                    <td>{{ $order->totalPrice }}</td>
                    <td>
                        @foreach($order->orderProducts as $orderProduct)
                            {{ $orderProduct->product->name }} {{--({{ $orderProduct->product->vendor->id }} {{ $orderProduct->product->vendor->name }})--}} x {{ $orderProduct->quantity }}<br>
                        @endforeach
                    </td>
                    <td>{{ $statusTypes[$order->status] }}</td>
                    {{--<td>{{ $order->client_email }}</td>
                    <td>{{ $order->created_at }}</td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $orders->links("pagination::bootstrap-4") }}

@stop