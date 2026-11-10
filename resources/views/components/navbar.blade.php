<nav class="navbar navbar-expand-md navbar-dark bg-warung">
    <div class="container">
        <span class="navbar-brand fw-bold">Warung Suki</span>

        @if(request('username'))
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/dashboard?username={{ request('username') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/profile?username={{ request('username') }}">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pengelolaan?username={{ request('username') }}">Pengelolaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Keluar</a></li>
                </ul>
            </div>
        @endif
    </div>
</nav>