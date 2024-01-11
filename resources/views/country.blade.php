<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeoHintr</title>
</head>
<body>
<div class="pt-20">
    @component('components.navbar')
    @endcomponent
</div>
<div class="main-container pt-20">
    <div class="container">
        <div class="grid grid-cols-3 gap-1">
            <div class=""><h1 class="text-4xl underline">Nom du pays</h1></div>
            <div class=""><img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Flag_of_Switzerland_%28Pantone%29.svg" style="height: 50px; width: 50px" alt="Drapeau du pays"></div>
            <div class=""><img src="/images/google-street-view-vector-logo.png" style="height: 50px; width: 50px" alt="Logo Street View"></div>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2">
        <div class="grid grid-row-3 gap-1">
            <div class=""><h1 class="text-3xl">Drapeau</h1></div>
            <div class=""><img class="text-2xl" src="#" alt="Layout du drapeau"></div>
            <div class="">@component('components.color')
                @endcomponent</div>
        </div>
        <div class="grid grid-rows-2 gap-1">
            <div class=""><h1 class="text-2xl">Spécial Char</h1>
                <div class="text-lg">ñ</div>
            </div>
            <div class=""><h1 class="text-2xl">Language</h1>
                <div class="text-lg">Anglais</div>
            </div>
        </div>
        <div class="grid grid-row-3 gap-1">
            <div class=""><h1 class="text-3xl">Panneaux</h1></div>
            <div class="">Autoroute :@component('components.color')
                @endcomponent</div>
            <div class="">Route principales :@component('components.color')
                @endcomponent</div>
        </div>
        <div class="grid grid-row-3 gap-1">
            <div class=""><h1 class="text-3xl">Drapeau</h1></div>
            <div class=""><img class="text-2xl" src="#" alt="Layout du drapeau"></div>
            <div class="">@component('components.color')
                @endcomponent</div>
        </div>
    </div>

</div>

</body>
</html>

