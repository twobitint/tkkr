<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>tkkr.dev</title>

    <link rel="icon" type="image/svg+xml" href="/logo.svg">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
  </head>
  <body {{ $attributes->merge(['class' => 'antialiased']) }}>
    {{ $slot }}

    <x-footer/>
  </body>
</html>
