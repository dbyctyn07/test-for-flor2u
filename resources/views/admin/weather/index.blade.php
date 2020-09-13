@extends('admin.layouts.app')
@section('content')

    @push('styles')
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    @endpush

    @push('scripts')
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $(function() {
                $("#city").autocomplete({
                    source: '{{ route("admin.weather.autocomplete") }}',
                    select: function( event, ui ) {
                        event.preventDefault();
                        $("#city").val(ui.item.value);
                    }
                });
            });
        </script>
    @endpush

    <h3>Admin dashboard</h3>
    <br>

    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    Погода
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => route('admin.weather.search'), 'method' => 'POST']) !!}

                        <div class="form-group">
                            {{ Form::label("city", "Город в РФ", ['class' => 'control-label'] ) }}
                            {{ Form::text("city", "", ['class' => 'form-control'] ) }}
                            <small class="form-text">Латиницей, например: "tula":</small>
                        </div>

                        {{ Form::submit('Искать', ['class' => 'btn btn-primary'] ) }}

                        @if (Session::has('city') && Session::has('temperature'))
                            <br><br>
                            <div class="alert alert-info">
                                {{ Session::get('city') }} — {{ Session::get('temperature') }}&#8451;
                            </div>
                        @endif

                        @if ($errors->any())
                            <br><br>
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop