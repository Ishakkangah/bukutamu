@extends('layouts.app')

@section('content')
    <div class="container my-2">
        <H2 class="card-title mb-3 font-weigh-bold">INFO PENGUNJUNG</H2>
        <div class="card mb-3 overflow-hidden shadow-sm">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://source.unsplash.com/500x500/computer" width="100%" height="100%"
                        style="object-fit:cover; object-position:center;" alt="Thumbnail">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">{{ strtoupper($dataTamu->name) }}</li>
                            <li class="list-group-item">Instansi : {{ strtoupper($dataTamu->instansi) }}</li>
                            <li class="list-group-item">Perihal : {{ strtoupper($dataTamu->perihal) }}</li>
                            <li class="list-group-item">Kunjungan : {{ strtoupper($dataTamu->created_at->diffForHumans()) }}
                            </li>
                            <li class="list-group-item">Tujuan : {{ strtoupper($dataTamu->tujuan) }}</li>
                            <li class="list-group-item">Keterangan : {{ strtoupper($dataTamu->keterangan) }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="/" class="card-link btn btn-primary">Home</a>
                            <a href="{{ route('delete', $dataTamu->id) }}" class="card-link btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
