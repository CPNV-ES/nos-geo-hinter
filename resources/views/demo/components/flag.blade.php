@extends('demo.components.layout')

@section('content')
    @foreach($countries as $country)
        <div class="p-6 m-6 border-2 border-dashed border-violet-600 rounded-lg place-self-center dark:bg-gray-900 relative">
            <div class="absolute -top-7 left-0 text-violet-600 font-semibold">{{ $country->name }}</div>
            <x-hint.flag :flag="$country->flag"/>
        </div>
    @endforeach
@endsection
