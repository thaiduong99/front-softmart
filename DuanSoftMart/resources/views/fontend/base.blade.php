<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shop</title>
    <base href="{{asset('')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('fontend.layout.css')
    @yield('css')
    
</head>

<body>
    @include('fontend.layout.header')
    @yield('content')
    @include('fontend.layout.footer')
    @include('fontend.layout.js')
    @yield('js')
</body>

</html>