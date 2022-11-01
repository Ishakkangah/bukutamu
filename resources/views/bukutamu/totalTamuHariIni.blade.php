@extends('layouts.app')


@section('content')
    <div class="container my-3 mb-5">
        <h5 class="display-4  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>
        <div class="d-flex justify-content-between  align-items-center ">
            <div>
                <h4 class="text-muted">Daftar pengunjung Tanggal {{ now()->format('d-M-Y') }}
                </h4>
                <h4 class="text-muted">
                    Total : {{ $data->count() }}
                    Pengunjung
                </h4>
            </div>
            {{-- CETAK TAMYU HARI INI PDF --}}
            <a href="{{ route('cetakBukuTamuHariIni') }}" class="btn btn-primary shadow">
                <i class="bi bi-printer-fill"></i> Cetak Tamu Hari ini PDF</a>
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
                    @php $i=1 @endphp
                    @forelse ($data as $d)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->created_at->format('d/m/Y') }}</td>
                            <td>{{ $d->instansi }}</td>
                            <td>{{ $d->perihal }}</td>
                            <td>
                                {{-- delete tamu --}}
                                <div class="d-flex justify-content-around">
                                    <form action="{{ route('delete', $d->id) }}" method="post" class="">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-danger px-2 py-2 rounded text-white border-0"
                                            onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                                class="bi bi-archive-fill"></i></button>
                                    </form>


                                    {{-- edit tamu --}}
                                    <a href="{{ route('edit', $d->id) }}" class="bg-primary px-2 py-2 rounded text-white"><i
                                            class="bi bi-pencil-fill"></i></a>

                                    {{-- lihat detail tentang tamu --}}
                                    <a href="{{ route('detailsTamu', $d->id) }}"
                                        class="bg-success px-2 py-2 rounded text-white"><i
                                            class="bi bi-emoji-heart-eyes"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-danger" role="alert">
                            Tidak ada tamu hari ini!
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @include('layouts.footer')
@endsection
