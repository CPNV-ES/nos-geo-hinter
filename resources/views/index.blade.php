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
<body>
<div class="main-container">
    <div class="pt-20">
        @component('components.navbar')
        @endcomponent
    </div>
    @component('components.statistics')
    @endcomponent
    <div class="px-6 pt-3">
        <div class="grid grid-cols-2 gap-6">
            <div class="row-span-1"><x-top-card></x-top-card></div>
            <div class="col-span-1 right-0"><x-top-card></x-top-card></div>
            <div class="row-span-2"><x-top-card></x-top-card></div>
            <div class="row-span-2"><x-top-card></x-top-card></div>
        </div>
    </div>
</div>
</body>
</html>

