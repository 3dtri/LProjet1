<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

       @include('layout.styles')
    </head>
    <body>
    <ul>
<li>
<a href='{{url('/')}}'>Accueil</a>
</li>

<li>
<a href="{{url('/page1')}}">page1</a></li>
    </ul>
       @yield('content')
    </body>
</html>
