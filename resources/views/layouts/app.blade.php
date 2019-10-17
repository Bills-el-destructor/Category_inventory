<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" {{ asset('assets/css/bootstrap.css') }}">
    <script></script>
</head>
<body>
   
    @include('partials.menu')
    <div>
        @yield('content')
    </div>
</body>
</html>