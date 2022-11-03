@extends('layouts.app')

@section('content')
    @if (Auth::user())
        <div class="container my-3 mb-5">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <h5 class="display-4  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
                KOMERING ILIR
            </h5>
            @if (auth()->user()->role_id === 3 || auth()->user()->role_id === 2)
                <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end">
                    <form action="{{ route('cetakBukuTamuBerdasarkanPilihan') }}" class="d-flex">
                        <div class="form-group mx-2">
                            <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                value="{{ old('tanggal_mulai') }}">
                            @error('tanggal_mulai')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="form-group mx-2">
                            <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                            <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                                value="{{ old('sampai_tanggal') }}">
                            @error('sampai_tanggal')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>

                        <div class="form-group mx-2 d-flex flex-column justify-content-end">
                            <label></label>
                            <button type="submit" class="btn btn-primary shadow">
                                <i class="bi bi-printer-fill"></i> Cetak PDF</button>
                        </div>
                    </form>
                </div>
            @endif
            <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end">
                <a href="{{ route('totalTamuBulanIni') }}" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                        class="bi bi-people-fill"></i> TOTAL
                    PENGUNJUNG MINGGU INI</a>
                <a href="{{ route('totalTamuHariIni') }}" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                        class="bi bi-person-lines-fill"></i> TOTAL PENGUNJUNG HARI INI</a>
                @if (auth()->user()->role_id == 3 || auth()->user()->role_id == 4)
                    <a href="{{ route('create') }}" class="btn btn-success fw-bold my-1 mx-1 shadow"> <i
                            class="bi bi-person-plus-fill"></i> PENGUNJUNG</a>
                @endif
            </div>

            <div class="input-group mb-3 shadow-sm">
                @if (Auth::user())
                    <form class="col-12 d-flex justify-content-between" action="{{ asset('cari') }}" method="get">
                        <input type="text" class="form-control" name="cari"
                            placeholder="Pencarian berdasarkan nama..">
                        <div class="input-group-append ">
                            <button class="btn btn-primary d-flex" type="submit" id="button"><i
                                    class="bi bi-search mx-2"></i>
                                cari</button>
                        </div>
                    </form>
                @endif
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover shadow rounded overflow-hidden ">
                    <thead class="bg-primary text-white">
                        <tr class="border-red">
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">PHOTO</th>
                            <th scope="col" class="text-center">NAMA</th>
                            <th scope="col" class="text-center">TANGGAL</th>
                            <th scope="col" class="text-center">INSTANSI</th>
                            <th scope="col" class="text-center">PERIHAL</th>
                            <th scope="col" class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @forelse ($bukutamus as $bukutamu)
                            <tr>
                                <th scope="row" class="text-center">{{ $i++ }}</th>
                                <td class="text-center">
                                    @if ($bukutamu->takeImage)
                                        <img src="{{ $bukutamu->takeImage ? $bukutamu->takeImage : asset('img/profile.jpg') }}"
                                            class="rounded" alt="photo" width="50px">
                                    @endif
                                </td>
                                <td class="text-center">{{ $bukutamu->name }}</td>
                                <td class="text-center">{{ $bukutamu->created_at->format('d/m/Y') }}</td>
                                <td class="text-center">{{ $bukutamu->instansi }}</td>
                                <td class="text-center">{{ $bukutamu->perihal }}</td>
                                <td>
                                    {{-- delete tamu --}}
                                    <div class="d-flex justify-content-center">
                                        @if (auth()->user()->role_id === 3)
                                            <form action="{{ route('delete', $bukutamu->id) }}" method="post"
                                                class="">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="bg-danger px-2 py-2 rounded text-white border-0"
                                                    onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                                        class="bi bi-archive-fill"></i></button>
                                            </form>


                                            {{-- edit tamu --}}
                                            <a href="{{ route('edit', $bukutamu->id) }}"
                                                class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                                    class="bi bi-pencil-fill"></i></a>
                                        @endif


                                        {{-- lihat detail tentang tamu --}}
                                        <a href="{{ route('detailsTamu', $bukutamu->id) }}"
                                            class="bg-info px-2 py-2 rounded text-white"><i class="bi bi-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger" role="alert">
                                Tidak ada tamu !
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mb-5">{{ $bukutamus->links() }}
            </div>
        </div>
        @include('layouts.footer')
    @else
        @include('auth.login')
    @endif
@endsection
