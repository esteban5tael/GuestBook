<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', '')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/materialize.min.css') }}">
    <link href="{{ asset('assets/css/icon.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/datatables.min.css')}}">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    @yield('styles')
</head>

<body>
    <header>
        @include('layouts.partials.navbar')
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div>

                    @yield('content')
                </div>
            </div>
        </div>


    </main>

    @include('layouts.partials.footer')
    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{asset('assets/js/jq.js')}}"></script>
    <script src="{{asset('assets/js/datatables.min.js')}}"></script>
    @yield('scripts')
</body>

</html>
