@extends('layouts.app')
@section('content')

<h1>Manage Users</h1>

<div class="col-lg-6">
     <form action="/admin/users/searched/user/show" method="GET">
             {{csrf_field()}}
             <div class="input-group">
            <input type="text" class="form-control" name="searchTerm" value="{{ isset($searchTerm) ? $searchTerm : '' }}" placeholder="Search for...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Search</button>
          </span>
        </div><!-- /input-group -->
     </form>
</div><!-- /.col-lg-6 -->
<section>
<div class="col-lg-12">
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                 <td>
                        {{ $user->name }}
                </td>

                 <td>
                     {{ $user->email }}
                 </td>

                <td>
                    <a href="/admin/users/{{ $user->id }}">
                        <button>Edit</button>
                    </a>
                </td>
                <td>
                    <a href="/admin/users/{{ $user->id }}/delete">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</section>

    @endsection