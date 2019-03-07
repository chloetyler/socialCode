<h1>Hello</h1>

    <div class="col-sm-8 blog-main">
        @foreach($users as $user)
            <div class="card" style="margin-bottom: 10px">
                <div class="card-block">
                    {{ $user->name }}
                </div>
            </div>
    @endforeach