@extends('layouts.app')

@section('content')
    <div class="container my-3 mb-5">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <h5 class="display-4  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>


        <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end">
            <a href="{{ route('bukutamu.create') }}" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                    class="bi bi-people-fill"></i> TOTAL PENGUNJUNG BULAN INI</a>
            <a href="{{ route('bukutamu.create') }}" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                    class="bi bi-person-lines-fill"></i> TOTAL PENGUNJUNG HARI INI</a>
            <a href="{{ s('bukutamu.create') }}" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                    class="bi bi-person-plus-fill"></i> Pengunjung</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow rounded overflow-hidden ">
                <thead class="bg-primary text-white">
                    <tr class="border-red">
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">INSTANSI</th>
                        <th scope="col">PERIHAL</th>
                        <th scope="col" class="text-center">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bukutamus as $bukutamu)
                        <tr>
                            <th scope="row">#</th>
                            <td>{{ $bukutamu->name }}</td>
                            <td>{{ $bukutamu->created_at->diffForHumans() }}</td>
                            <td>{{ $bukutamu->instansi }}</td>
                            <td>{{ $bukutamu->perihal }}</td>
                            <td>
                                {{-- delete tamu --}}
                                <div class="d-flex justify-content-around">
                                    <form action="{{ route('delete', $bukutamu->id) }}" method="post" class="">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-danger px-2 py-2 rounded text-white border-0"
                                            onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                                class="bi bi-archive-fill"></i></button>
                                    </form>


                                    {{-- edit tamu --}}
                                    <a href="{{ route('edit', $bukutamu->id) }}"
                                        class="bg-primary px-2 py-2 rounded text-white"><i
                                            class="bi bi-pencil-fill"></i></a>

                                    {{-- lihat detail tentang tamu --}}
                                    <a href="{{ route('detailsTamu', $bukutamu->id) }}"
                                        class="bg-success px-2 py-2 rounded text-white"><i
                                            class="bi bi-emoji-heart-eyes"></i></a>
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
@endsection
