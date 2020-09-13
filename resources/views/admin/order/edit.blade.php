@extends('admin.layouts.app')
@section('content')

    @push('scripts')
        <script>

            function buildProductsTable (resp) {
                var cnt="";
                var i;
                for (i = 0; i < resp.mainData.length; i++) {
                    cnt +=
                        '<tr><td>'  + resp.mainData[i].id +
                        '</td><td>' + resp.mainData[i].name +
                        '</td><td>' + resp.mainData[i].vendor +
                        '</td><td>' + resp.mainData[i].price_single +
                        '</td><td>' + resp.mainData[i].quantity +
                        '</td><td>' + resp.mainData[i].price_all +
                        '</td><td><button type="button" class="btn btn-outline-danger btn-sm" data-opid="' + resp.mainData[i].id + '">delete</button></td></tr>';
                }
                cnt += '<tr><th colspan="5">Общая стоимость заказа</th><th>' + resp.totalPrice + '</th><th></th></tr>';
                $("#productsTable").html(cnt);
            }

            $('#productsTable').on("click", "button.btn-sm", function () {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.orderProduct.destroy') }}',
                    data: {
                        opid: $(this).data("opid"),
                    },
                    success: function(response) {
                        buildProductsTable(response);
                    }
                });
            });

            $('#addProductButton').click (function () {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.orderProduct.add') }}',
                    data: {
                        quantity: $('input[name="quantity"]').val(),
                        product_id: $('select[name="product_id"]').val(),
                        order_id: {{ $order->id }}
                    },
                    success: function(response) {
                        $('input[name="quantity"]').val(1);
                        buildProductsTable(response);
                    }
                });
            });

        </script>
    @endpush


    <h3>Заказ #{{ $order->id }}</h3>
    <br>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="details-tab" data-toggle="tab" href="#details" role="tab" aria-controls="details" aria-selected="true">Детали</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products" aria-selected="false">Продукты</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">

            <br><br>

            {!! Form::open(['url' => route('admin.order.update', $order), 'method' => 'PUT', 'class' => 'form-horizontal']) !!}

                <div class="form-row">

                    <div class="col">
                        <div class="form-group required">
                            {{ Form::label("client_email", "E-mail", ['class' => 'control-label'] ) }}
                            {{ Form::text("client_email", old('client_email', $order->client_email), ['class' => 'form-control'] ) }}
                        </div>
                    </div>

                    <div class="col">
                        {{ Form::label("partner_id", "Партнер", ['class' => 'control-label'] ) }}
                        {{ Form::select("partner_id", $partners->pluck('name', 'id'), old('partner_id', $order->partner_id), ["class" => "form-control"] ) }}
                    </div>

                    <div class="col">
                        {{ Form::label("status", "Cтатус", ['class' => 'control-label'] ) }}
                        {{ Form::select("status", $statusTypes, old('status', $order->status), ["class" => "form-control"] ) }}
                    </div>

                </div>

                <br>
                {{ Form::submit('Сохранить', ['class' => 'btn btn-primary'] ) }}

            {!! Form::close() !!}

            @if ($errors->any())
                <br><br>
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

        </div>
        <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">


            <br><br>


                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>order-product id</th>
                                <th>наименование</th>
                                <th>vendor</th>
                                <th>цена</th>
                                <th>кол-во</th>
                                <th>цена х кол-во</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="productsTable">
                        @if(sizeof($order->allProductsArr) > 0)
                            @foreach($order->allProductsArr as $product)
                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>{{ $product['vendor'] }}</td>
                                    <td>{{ $product['price_single'] }}</td>
                                    <td>{{ $product['quantity'] }}</td>
                                    <td>{{ $product['price_all'] }}</td>
                                    <td><button type="button" class="btn btn-outline-danger btn-sm" data-opid="{{ $product['id'] }}">delete</button></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center"><span class="text-info">В данном заказе продукты отсутствуют.</span></td>
                            </tr>
                        @endif
                        <tr>
                            <th colspan="5">Общая стоимость заказа</th>
                            <th>{{ $order->totalPrice }}</th>
                            <th></th>
                        </tr>
                        </tbody>
                    </table>
                </div>

            <br>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            Добавить продукт:
                        </div>
                        <div class="card-body">

                            <label for="">Наименование</label>
                            <select class="form-control" name="product_id">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }} ({{ $product->price }} руб.)</option>
                                @endforeach
                            </select>

                            <br>
                            <label for="">Кол-во</label>
                            <input class="form-control" type="number" min="1" value="1" name="quantity" style="width:70px;">

                            <br>
                            <button type="button" class="btn btn-primary btn-sm" id="addProductButton">Добавить</button>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <br><br>

@stop