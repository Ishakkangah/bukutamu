@extends('layouts.app')

@section('content')
    <div class="container my-2">
        <H2 class="card-title mb-3 font-weigh-bold text-secondary">INFO PENGUNJUNG</H2>
        <div class="card mb-3 overflow-hidden shadow">
            <div class="row no-gutters ">
                <div class="col-md-4">
                    <img src="{{ $dataTamu->takeImage ? $dataTamu->takeImage : asset('img/profile.jpg') }}"
                        class="rounded w-100" style="    height: 400px; object-fit: cover; object-position: center;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold text-muted">Nama :{{ strtoupper($dataTamu->name) }}
                            </li>
                            <li class="list-group-item text-muted">Instansi : {{ strtoupper($dataTamu->instansi) }}</li>
                            <li class="list-group-item text-muted">Perihal : {{ strtoupper($dataTamu->perihal) }}</li>
                            <li class="list-group-item text-muted">Kunjungan :
                                {{ strtoupper($dataTamu->created_at->diffForHumans()) }}
                            </li>
                            <li class="list-group-item text-muted">Tujuan : {{ strtoupper($dataTamu->tujuan) }}</li>
                            <li class="list-group-item text-muted">Keterangan : {{ strtoupper($dataTamu->keterangan) }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="/" class="card-link btn btn-primary">
                                Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
