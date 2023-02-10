<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel - @yield('title')</title>

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @hasSection('css')
        @yield('css');
    @endif

</head>
<body>

@include('front.includes.header')

<div class="container">
    <div class="row py-3">
        <div class="col-8">
            @yield('content')
        </div>
        <div class="col-4">
            {{-- @yield('sidebar') --}}
            @section('sidebar')
                <h1>Últimos Postados</h1>

                <ul>
                    <li>Lorem ipsum dolor sit amet.</li>
                    <li>Dolorum accusantium eius sit minima!</li>
                    <li>Quos aliquid odio qui tenetur?</li>
                    <li>Qui perferendis esse aut facere.</li>
                    <li>Ut magnam excepturi similique nulla!</li>
                </ul>

            @show
        </div>
    </div>
</div>

@include('front.includes.footer')

<script src="{{ asset('js/app.js') }}"></script>
@hasSection('js')
    @yield('js');
@endif

</body>
</html>
