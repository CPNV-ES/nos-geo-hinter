<div>
    <h6 class="my-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $language->name }}</h6>
    <ul class="flex">
        @foreach($language->characters as $character)
            <li class="border border-dashed border-gray-100 dark:border-gray-700 aspect-square w-20 flex flex-col justify-center dark:text-white text-center p-2">
                <p class="mono block text-2xl">{{ $character->char }}</p>
                <p class="mono text-sm text-gray-500">{{ $character->unicode }}</p>
            </li>
        @endforeach
    </ul>
</div>
