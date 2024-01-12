<head>@vite(['resources/css/app.css','resources/js/app.js'])</head>

<h1>Dynamic Search with JavaScript Filters</h1>
<input type="text" id="searchInput" placeholder="Search...">
<ul id="itemList">
    @foreach($countries as $country)
        <li class="list-group-item">{{$country->name}}</li>
    @endforeach
</ul>
<script src="search.js"></script>
