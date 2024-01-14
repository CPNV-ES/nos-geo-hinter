<div class="block max-w-2xl p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 text-gray-900">
    <h5 class="mb-2 text-2xl font-bold tracking-tight">Drapeau</h5>
    <div class="pb-4">
        <img src="{{$country->flag->layout['image']}}" alt="Arrangement {{$country->flag->layout['description']}}">
    </div>
    <div>
        <h6 class="text-lg mb-2">Couleurs</h6>
        <div class="flex gap-2">
            @foreach($country->flag->colors as $color)
                <x-color :color="$color"/>
            @endforeach
        </div>
    </div>
    <x-log :country="$country" scope='Forme'></x-log>
</div>
