<div class="block max-w-2xl h-fit p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 text-gray-900">
    <h5 class="mb-2 text-2xl font-bold tracking-tight">Plaque</h5>
    <div>
        <h6 class="text-lg font-bold mb-2">Spécifications</h6>
        <p>Doit avoir une plaque à l'avant : <span class="font-bold">{{ $country->plate->specifications->CAN_HAVE_NO_FRONT_PLATE ? "Non" : "Oui" }}</span></p>
        <p>Plaque avant/arrière identique : <span class="font-bold">{{ $country->plate->specifications->HAS_SAME_FRONT_BACK ? "Oui" : "Non" }}</span></p>
        <h6 class="text-lg font-bold my-2">Couleurs</h6>
        <div class="flex gap-2">
            @foreach($country->plate->colors as $color)
                <x-color :color="$color"/>
            @endforeach
        </div>
    </div>
    <x-log :country="$country" scope="Plaque"></x-log>
</div>
