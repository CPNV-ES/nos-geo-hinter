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
<hr class="my-5">
