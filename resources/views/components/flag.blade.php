<div class="block p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Drapeau</h5>
    <div class="pb-4">
        <h6 class="text-lg mb-2">Arrangement</h6>
        <img src="{{$flag->layout['image']}}" alt="Arrangement {{$flag->layout['description']}}">
    </div>
    <div>
        <h6 class="text-lg mb-2">Couleurs</h6>
        <div class="flex gap-2">
            @foreach($flag->colors as $color)
                <x-color :color="$color"/>
            @endforeach
        </div>
    </div>
</div>
