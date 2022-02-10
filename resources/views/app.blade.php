<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>NaVU</title>
    </head>
    <body class="antialiased">
        <div id="app">
            {{-- vue stuff in here --}}
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>