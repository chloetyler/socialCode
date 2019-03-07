@extends('layouts.app')
@section('content')

    <div class="col-sm-1">
    </div>

    <div class="col-sm-6">

        <h1>Add a Theme</h1>
        <hr>

        <form method="POST" action="/themes">

            {{ csrf_field() }}


            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="What is your theme called?" required>
            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
            </div>

            <div class="form-group">
                <label for="cdn_url">CDN</label>
                <input type="text" class="form-control" id="cdn_url" name="cdn_url" placeholder="Paste your CDN URL here" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Theme!</button>

            @include ('layouts.errors')

        </form>
    </div>
@endsection