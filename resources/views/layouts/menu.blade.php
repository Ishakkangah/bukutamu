<ul class="sidebar-menu mt-2">
    <li class="menu-header">Menu</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Lihat Pengunjung</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="/">Semua</a>
            </li>
            <li><a class="nav-link" href="{{ route('totalTamuHariIni') }}">Sekarang</a>
            </li>
            <li><a class="nav-link" href="{{ route('totalTamuBulanIni') }}">Minggu</a>
            </li>
            <li><a class="nav-link" href="{{ route('filterTamu') }}">Filter</a>
            </li>
        </ul>
    </li>
    {{-- DOWNLOAD PDF --}}
    @if (auth()->user()->role_id === 3 || auth()->user()->role_id == 2)
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-excel"></i><span>Download
                    PDF</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('cetakBukuTamuHariIni') }}">Sekarang</a>
                </li>
                <li><a class="nav-link" href="{{ route('cetakBukuTamuMingguIni') }}">Minggu</a>
                </li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#pdfDownloadModal">
                        Filter</a>
                </li>
            </ul>
        </li>
    @endif
    {{-- DOWNLOAD EXCEL --}}
    @if (auth()->user()->role_id === 3 || auth()->user()->role_id == 2)
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-pdf"></i><span>Download
                    Excel</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('exportExcelHariIni') }}">Sekarang</a>
                </li>
                <li><a class="nav-link" href="{{ route('exportExcelMungguIni') }}">Minggu</a>
                </li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#pdfDownloadModal">
                        Filter</a>
                </li>
            </ul>
        </li>
    @endif
    {{-- TAMBAH PENGUNJUNG --}}
    @if (auth()->user()->role_id === 3)
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-plus"></i><span>Buat
                    Pengunjung</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('create') }}">Tambah Pengunjung</a>
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

{{-- MODAL EXCEL --}}
<div class="modal fade" tabindex="-1" role="dialog" id="excellDownloadModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download Excell</h5>
            </div>
            <form action="{{ route('cetakExcelBukuTamuBerdasarkanFilter') }}" class="d-flex flex-column">
                <div class="modal-body">
                    <div class="form-group mx-2">
                        <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                            value="{{ old('tanggal_mulai') }}">
                        @error('tanggal_mulai')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group mx-2">
                        <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                            value="{{ old('sampai_tanggal') }}">
                        @error('sampai_tanggal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="bg-whitesmoke mx-0 br float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- MODAL PDF --}}
<div class="modal fade" tabindex="-1" role="dialog" id="pdfDownloadModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download PDF</h5>
            </div>
            <form action="{{ route('cetakBukuTamuBerdasarkanPilihan') }}" class="d-flex flex-column">
                <div class="modal-body">
                    <div class="form-group mx-2">
                        <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                            value="{{ old('tanggal_mulai') }}">
                        @error('tanggal_mulai')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-group mx-2">
                        <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                            value="{{ old('sampai_tanggal') }}">
                        @error('sampai_tanggal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="bg-whitesmoke mx-0 br float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
