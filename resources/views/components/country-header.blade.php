<div class="border-b border-b-gray-400 pb-2">
    <img src="{{ $country->flag->image }}" alt="Drapeau {{ $country->name }}">
    <div>
        <h1>{{ $country->name }}</h1>
        <p class="text-gray-500">{{ $country->contient }}</p>
    </div>
</div>
