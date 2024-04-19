<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yeald('Title', 'Default')</title>
</head>
<body>
    @include('partials.nav')
    @yield('content')
    @vite('resources/css/app.css')
</body>
</html>
