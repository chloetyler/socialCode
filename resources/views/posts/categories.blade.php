@extends('layouts.app')
@section('content')

    <div class="col-sm-8">
        <h4>Categories</h4>
        @foreach($categories as $cat)
            <a href="/posts/{{$cat->id}}">
                <button class="btn btn-info" value="{{ $cat->id }}">{{ $cat->name }}</button>
            </a>
            <br><br>
        @endforeach
    </div>




@endsection