<head>@vite(['resources/css/app.css','resources/js/app.js'])</head>

<div class="pl-3 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <h1 class="py-2 text-2xl font-bold ">Catégorie : {{$scope}}</h1>
    <img class=" rounded-t-lg" src="{{$country->flag->image}}" style="height: 200px; width: 200px"
         alt="hints image"/>

    <div class="px-5 pb-5">
            <h4 class="px-3 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$country->name}}</h4>
        <div class="flex justify-items-center">
            <a href="{{route('countries.show', $country)}}"
               class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Aller
                voir !</a>
        </div>
    </div>
</div>
