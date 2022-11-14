@if (Auth::user())
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li>
                        <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle">
                    {{-- BUAT DISINI JIKA MENAMBAHKAN MENU --}}
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                            class="rounded-circle mr-1" />
                        <div class="d-sm-none d-lg-inline-block">{{ auth()->user()->name }}</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('logout') }}" class="dropdown-item has-icon"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <i class="far fa-user"></i> Keluar
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand mt-2">
                    <a href="#"><img src="{{ asset('img/logo_kominfo1.png') }}" alt="diskomimfo_oki"
                            width="180px" /></a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="#"><img src="{{ asset('img/logo_pemda.png') }}" alt="diskomimfo_oki"
                            width="30px" /></a>
                </div>
                {{-- {% include "layouts/menu.html" %} --}}
                @include('layouts.menu')
            </aside>
        </div>
    </div>
@else
    @include('components.alertForm') @include('bukutamu.create')
@endif
