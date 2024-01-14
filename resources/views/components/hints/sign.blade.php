<div class="block max-w-2xl p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 text-gray-900">
    <h5 class="mb-2 text-2xl font-bold tracking-tight">Panneaux</h5>
    <div class="mb-2">
        <p>Type : <span class="font-bold">{{ $sign->type }}</span></p>
    </div>
    <div class="mb-2">
        <p class="mb-2">Forme : <span class="font-bold">{{ $sign->shape['name'] }}</span></p>
        <img src="{{$sign->shape['image']}}" alt="Arrangement {{$sign->shape['name']}}">
    </div>
    <div>
        <h6 class="text-lg mb-2">Couleurs</h6>
        <div class="flex gap-2">
            @foreach($sign->colors as $color)
                <x-color :color="$color"/>
            @endforeach
        </div>
    </div>
</div>
