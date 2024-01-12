<div>
    <form action="{{ route('hint.log') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="hidden" name="country_id" value="{{$country->}}">
            <input type="hidden" name="scope" value="{{$scope}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
