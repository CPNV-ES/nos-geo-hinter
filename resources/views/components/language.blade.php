<div>
    <h6 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $language->name }}</h6>
    <ul>
        @foreach($language->characters as $character)
            <li class="border border-dashed border-gray-50 dark:border-gray-700 aspect-square h-fit flex flex-col justify-center dark:text-white text-center p-2">
                <p class="jb-mono block text-2xl">{{ $character->char }}</p>
                <p class="jb-mono text-sm text-gray-500">{{ $character->unicode }}</p>
            </li>
        @endforeach
    </ul>
</div>
