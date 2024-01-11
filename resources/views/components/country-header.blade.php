<a href="{{ route('country.show', $country) }}" class="shadow flex gap-4 items-center rounded-xl border border-gray-200 p-3 text-gray-900 hover:bg-white hover:border-gray-400 active:border-red-800 hover:text-red-700">
    <img src="{{ $country->flag->image }}" alt="Drapeau {{ $country->name }}" class="h-16 rounded">
    <span class="text-3xl font-bold tracking-tight">{{ $country->name }}</span>
</a>
