<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>GeoHintr</title>
</head>
<body class="pt-24">
@component('layouts.components.navbar')@endcomponent
<main class="max-w-screen-xl mx-auto">
    @yield('content')
</main>
</body>
</html>

