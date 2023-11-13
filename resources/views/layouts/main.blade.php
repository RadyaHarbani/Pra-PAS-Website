<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-300">
    @include('layouts.partials.navbar')
    <div class="Container">
        @yield('container')
    </div>
</body>

</html>