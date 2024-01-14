@extends('layouts.base')

@section('content')
    @foreach($continents as $key=>$continent)
        <div class="pb-6">
            <div class="text-2xl font-bold pb-2">{{ $key }}</div>
            <div class="grid grid-cols-3 gap-4">
                @foreach($continent as $country)
                    <x-country-card :$country/>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
