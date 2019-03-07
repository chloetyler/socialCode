@extends('layouts.app')
@section('content')

    <h1>Manage Themes</h1>
    <section>
        <div class="col-lg-12">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>CDN</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($themes as $theme)
                    <tr>
                        <td>
                            {{ $theme->name }}
                        </td>

                        <td>
                            {{ $theme->description }}
                        </td>

                        <td>
                            {{ $theme->cdn_url }}
                        </td>

                        <td>
                            <a href="/admin/themes/{{ $theme->id }}">
                                <button>Edit</button>
                            </a>
                        </td>
                        <td>
                            <a href="/admin/themes/{{ $theme->id }}/delete">
                                <button>Delete</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>

@endsection