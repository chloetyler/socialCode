{{--makes sure it doesnt act weird if page is refreshed--}}
@if (count($errors))
    <div class="form-group">
        {{--where error messages if validation failed will pop up--}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif