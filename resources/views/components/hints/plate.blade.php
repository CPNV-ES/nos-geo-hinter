<div class="block max-w-2xl p-4 min-w-max bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:text-gray-50 text-gray-900">
    <h5 class="mb-2 text-2xl font-bold tracking-tight">Plaque</h5>
    <div>
        <h6 class="text-lg mb-2">Spécifications</h6>
        <p>Doit avoir une plaque à l'avant : </p><p class="font-bold">{{ $plate->specifications->CAN_HAVE_NO_FRONT_PLATE ? "Non" : "Oui" }}</p>
        <p>Plaque avant/arrière identique :</p><p class="font-bold">{{ $plate->specifications->HAS_SAME_FRONT_BACK ? "Oui" : "Non" }}</p>
        <h6 class="text-lg mb-2">Couleurs</h6>
        <div class="flex gap-2">
            @foreach($plate->colors as $color)
                <x-color :color="$color"/>
            @endforeach
        </div>
    </div>
</div>
