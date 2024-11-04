<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}" type="image/x-icon">
        <title>{{ $title }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
