<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Welcome to Social Code!</h4>
        <a href="/posts/create">
            <button type="button" class="btn btn-primary">Create a Post!</button>
        </a>
    </div>
    <br>

    {{--TAGS--}}
@if (Auth::user())
<div class="sidebar-module">
        <a href="/posts/categories">
            <button class="btn btn-info">Categories</button>
        </a>
</div>

    @endif
</div><!-- /.blog-sidebar -->