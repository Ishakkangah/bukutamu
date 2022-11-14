<ul class="sidebar-menu mt-2">
    <li class="menu-header">Menu</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="/">Semua pengunjung</a>
            </li>
            <li><a class="nav-link" href="{{ route('totalTamuHariIni') }}">Pengunjung hari ini</a>
            </li>
            <li><a class="nav-link" href="{{ route('totalTamuBulanIni') }}">Pengunjung minggu ini</a>
            </li>
            <li><a class="nav-link" href="{{ route('filterTamu') }}">Filter</a>
            </li>
        </ul>
    </li>
    @if (auth()->user()->role_id === 3)
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-plus"></i><span>Tambah
                    Pengunjung</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('create') }}">Buat pengunjung</a>
                </li>
            </ul>
        </li>
    @endif
    <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
</ul>
</ul>
