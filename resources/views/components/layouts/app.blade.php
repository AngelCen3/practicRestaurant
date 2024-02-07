<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <title>{{ $title ?? 'Page Title' }}</title>

    </head>
    <body>
        {{--<h3 style="color: blue;">Que color es este</h3>--}}
        <h3>Que color es este</h3>

        {{ $slot }}
    </body>
</html>
