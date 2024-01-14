@extends('layouts.base')

@section('content')
    @component('components.statistics')@endcomponent
    <div class="px-6 pt-3">
        <div class="grid grid-cols-2 gap-6">
            <div class="row-span-1">@component('components.top-card') @endcomponent</div>
            <div class="col-span-1 right-0">@component('components.top-card') @endcomponent</div>
            <div class="row-span-2">@component('components.top-card') @endcomponent</div>
            <div class="row-span-2">@component('components.top-card') @endcomponent</div>
        </div>
    </div>
@endsection
