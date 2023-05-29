<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
      <nav class="flex sm:justify-center space-x-4">
        <a href="/" class="text-xl font-semibold text-gray-900 dark:text-white">Home</a>
        <a href="/about" class="text-xl font-semibold text-gray-900 dark:text-white">About</a>
        <a href="/customers" class="text-xl font-semibold text-gray-900 dark:text-white">Customers</a>
        <a href="/contact" class="text-xl font-semibold text-gray-900 dark:text-white">Contact</a>
      </nav>

      @yield('content')
    </body>
</html>
