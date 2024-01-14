<div class="pt-4">
    <form action="{{ route('hint.log') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="country_id" value="{{$country->_id}}">
            <input type="hidden" name="scope" value="{{$scope}}">
        </div>
        <button type="submit" class=" text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            J'aime
        </button>
    </form>
</div>
