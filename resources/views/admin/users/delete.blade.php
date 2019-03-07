<form method="POST" action="/admin/users/{{ $user->id }}">
    {{ csrf_field() }}

    {{method_field ("DELETE")}}

    <input type="hidden" name="id" value="{{ $user->id }}">

    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input class="form-control" name="name" id="exampleInputPassword1" value="{{ $user->name }}">
    </div>

    {{--<div class="form-group">--}}
        {{--<label for="exampleInputEmail1">Email address</label>--}}
        {{--<input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}">--}}
    {{--</div>--}}

    <button type="submit" class="btn btn-primary">Confirm Delete?</button>
</form>