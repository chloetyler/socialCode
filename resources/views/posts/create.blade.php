@extends('layouts.app')
@section('content')

    <div class="col-sm-1">
    </div>

    <div class="col-sm-6">

        <h1>Create a Post</h1>
        <hr>

        <form method="POST" action="/posts">

            {{ csrf_field() }}


            <div class="form-group">

                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="What is your post called?" required>
                <small id="titleHelp" class="form-text text-muted">Make it something catchy!</small>

            </div>

            <div class="form-group">

                <label for="category">Category</label>
                {{--<input type="text" class="form-control" id="category" name="category" placeholder="What is your post about?" required>--}}
                <select class="form-control" id="category" name="category" required>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="body">Post Body:</label>
                <textarea class="form-control" id="body" name="body" rows="10" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Publish</button>

            @include ('layouts.errors')

        </form>
    </div>
@endsection