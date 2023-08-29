<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $judul ?? 'Default' }}</title>
</head>
<body>
    @include('learning.components.navbar')
    @include('learning.components.sidebar')
    @yield('content')
</body>
</html>