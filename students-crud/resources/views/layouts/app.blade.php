<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? 'Student CRUD'}}</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    @livewireStyles
    @yield('head')
</head>
<body>
@yield('content')
<script src="/assets/js/bootstrap.bundle.min.js"></script>
@livewireScripts
@yield('scripts')
</body>
</html>