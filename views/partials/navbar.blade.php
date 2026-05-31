<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">MiSSS</a>
        <div class="navbar-nav ms-auto">
            @if(auth()->check())
                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                <a class="nav-link" href="{{ url('/logout') }}">Salir</a>
            @else
                <a class="nav-link" href="{{ url('/login') }}">Entrar</a>
            @endif
        </div>
    </div>
</nav>



