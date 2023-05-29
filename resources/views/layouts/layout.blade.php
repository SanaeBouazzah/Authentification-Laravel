<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website - @yield('title')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
      <nav class="flex sm:justify-center space-x-4">
        <a href="{{route('home')}}" class="text-xl font-semibold text-gray-900 dark:text-white">Home</a>
        <a href="{{route('about')}}" class="text-xl font-semibold text-gray-900 dark:text-white">About</a>
        <a href="{{route('customers')}}" class="text-xl font-semibold text-gray-900 dark:text-white">Customers</a>
        <a href="{{route('contact')}}" class="text-xl font-semibold text-gray-900 dark:text-white">Contact</a>
      </nav>

      @yield('content')
    </body>
</html>
