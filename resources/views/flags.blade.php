<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-container">
    <div class="pt-24">
        @component('components.navbar')
        @endcomponent
    </div>
    @foreach($continents as $key=>$continent)
        <div class="pb-6">
            <div class="text-2xl font-bold pb-2">{{ $key }}</div>
            <div class="grid grid-cols-3 gap-4">
                @foreach($continent as $country)
                    <x-country-card :$country/>
                @endforeach
            </div>
        </div>
    @endforeach

</div>


</body>
</html>
