@extends('layouts.app')
@section('content')

<h1>Update User</h1>

<form method="POST" action="/admin/users/{{ $user->id }}">
    {{ csrf_field() }}

    {{method_field ("PATCH")}}

    <input type="hidden" name="id" value="{{ $user->id }}">

    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input class="form-control" name="name" id="exampleInputPassword1" value="{{ $user->name }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}">
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="name" value="1">
        <label class="form-check-label" for="exampleCheck1">User Administrator</label>
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck2" name="name" value="2">
        <label class="form-check-label" for="exampleCheck1">Post Moderator</label>
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck3" name="name" value="3">
        <label class="form-check-label" for="exampleCheck1">Theme Manager</label>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

    @endsection
