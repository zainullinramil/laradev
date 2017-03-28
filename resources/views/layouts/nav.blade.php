<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/posts/create">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            @if(Auth::check())
                <a class="nav-link ml-auto" href="/logout">{{ Auth::user()->name }}</a>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
            @endif
        </nav>
    </div>
</div>
