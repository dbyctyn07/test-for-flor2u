@include('admin.partials.header')
<div class="container-fluid">
    <div class="row">
        @include('admin.partials.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')
        </main>
    </div>
</div>
@include('admin.partials.footer')
