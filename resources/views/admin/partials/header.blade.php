<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin panel</title>

    <link href="{{ asset('css/admin/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/dashboard.css') . "?" . mt_rand (100000, 999999) }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/noty/noty.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/noty/relax.css') }}">

    @stack('styles')

</head>

<body>

    @if (Session::has('flashMessage') && Session::has('flashType'))
        @push('scripts')
            <script>
                new Noty({
                    type: '{{ Session::get('flashType') }}',
                    layout: 'topRight',
                    theme: 'relax',
                    text: '{{ Session::get('flashMessage') }}',
                    timeout: '4000',
                    progressBar: false,
                }).show();
            </script>
        @endpush
    @endif

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin panel</a>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <form action="{{ route('logout') }}" method="POST" style="">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
                    <a class="nav-link" href="#" onclick="$(this).closest('form').submit()">Logout</a>
                </form>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
