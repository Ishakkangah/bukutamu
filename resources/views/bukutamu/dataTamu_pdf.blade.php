@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container my-3 mb-5">
            <h5 class="display-4  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
                KOMERING ILIR
            </h5>


            <div class="table-responsive">
                <table class="table table-bordered table-hover shadow rounded overflow-hidden ">
                    <thead class="bg-primary text-white">
                        <tr class="border-red">
                            <th scope="col">#</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">INSTANSI</th>
                            <th scope="col">PERIHAL</th>
                            <th scope="col">tujuan</th>
                            <th scope="col">keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                @php $i=1 @endphp
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->created_at->diffForHumans() }}</td>
                                <td>{{ $d->instansi }}</td>
                                <td>{{ $d->perihal }}</td>
                                <td> {{ $d->tujuan }}</td>
                                <td> {{ $d->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
