<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>GeoHintr</title>
</head>
<body class="pt-40">
@component('components.navbar')
@endcomponent
<div class="max-w-screen-xl mx-auto px-3">
    <div class="border-b border-b-gray-400 pb-2 flex gap-2 mb-5">
        <img src="{{ $country->flag->image }}" alt="Drapeau {{ $country->name }}" class="h-16 rounded">
        <div>
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $country->name }}</h1>
            <p class="text-gray-500">{{ $country->continent }}</p>
        </div>
    </div>
    <div class="grid gap-4 grid-cols-2">
        <div class="">
            <x-hint.flag :flag="$country->flag"/>
            <x-log :country="$country" scope='Forme' class="absolute top-3 right-3"></x-log>
        </div>
        <div class="">
            <div class="block max-w-2xl p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 text-gray-900">
                <h5 class="mb-2 text-2xl font-bold tracking-tight">Langues</h5>
                @foreach($country->languages as $language)
                    <x-hint.language :language="$language"/>
                @endforeach
                <x-log :country="$country" scope='Langue'></x-log>
            </div>
        </div>
        <div class="">
            <div class="block max-w-2xl p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 text-gray-900">
                <h5 class="mb-2 text-2xl font-bold tracking-tight">Panneaux</h5>
                @foreach($country->signs as $sign)
                    <x-hint.sign :sign="$sign"/>
                @endforeach
                <x-log :country="$country" scope="Panneaux"></x-log>
            </div>
        </div>
    </div>
</div>
</body>
</html>

