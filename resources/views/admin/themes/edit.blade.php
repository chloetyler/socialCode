@extends('layouts.app')
@section('content')

    <h1>Update Theme</h1>

    <form method="POST" action="/admin/themes/{{ $theme->id }}">
        {{ csrf_field() }}

        {{method_field ("PATCH")}}

        <input type="hidden" name="id" value="{{ $theme->id }}">

        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input class="form-control" name="name" id="exampleInputPassword1" value="{{ $theme->name }}">
        </div>

        <div class="form-group">
            <label for="exampleInputDescription">Description</label>
            <input name="description" class="form-control" id="exampleInputDescription" value="{{ $theme->description }}">
        </div>

        <div class="form-group">
            <label for="exampleInputcdn_url">CDN URL</label>
            <input name="cdn_url" class="form-control" id="exampleInputCDN_URL" value="{{ $theme->cdn_url }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

@endsection
