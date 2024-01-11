<div class="border-b border-b-gray-400 pb-2 flex gap-2">
    <img src="{{ $country->flag->image }}" alt="Drapeau {{ $country->name }}" class="h-16 rounded">
    <div>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $country->name }}</h1>
        <p class="text-gray-500">{{ $country->continent }}</p>
    </div>
</div>
