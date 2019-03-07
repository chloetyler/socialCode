@extends('layouts.app')
@section('content')

    <div class="col-sm-8">
        @foreach ($posts as $post)
            @include ('posts.post')

            @endforeach
    </div>

    {{--<nav class="blog-pagination">--}}


@endsection