<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/user') }}">
            <div class="brand-icon">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <span>PWL App</span>
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto gap-1">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user*') ? 'active' : '' }}" href="{{ url('/user') }}">
                        <i class="bi bi-people-fill me-1"></i> Daftar Pengguna
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('matakuliah*') ? 'active' : '' }}" href="{{ url('/matakuliah') }}">
                        <i class="bi bi-journal-bookmark-fill me-1"></i> Mata Kuliah
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
