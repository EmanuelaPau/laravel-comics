<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','DC-Comics')</title>

    @vite('resources/js/app.js')
    @yield('custom-stylesheets')
    @yield('custom-script-head')
</head>
<body>
    @include('partials.header')
    <main>
        @yield('main-content')
    </main>
    @include('partials.footer')
    {{-- @include('main-content') --}}
    @yield('custom-scripts-tail')
    thomas
    @vite('resources/js/app.js')
</body>
</html>