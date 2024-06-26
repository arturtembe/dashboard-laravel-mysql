
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- @stack('style') --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <script src="{{ asset('js/jQuery 3.7.js') }}"></script>
</head>
<body>

    @component('components.sidebar')
    @endcomponent
    {{-- Directive --}}
    @yield('conteudo')
    
    {{-- @stack('script') --}}
    
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>