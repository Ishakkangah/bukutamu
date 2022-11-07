@extends('layouts.app')


@section('content')
    <div class="container my-3 mb-5">
        @include('components.title')
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="text-muted">Daftar pengunjung dari Tanggal {{ $hariPertama->format('d-M-Y') }} -
                    {{ $hariTerakhir->format('d-M-Y') }}
                </h4>
                <h4 class="text-muted">
                    Total : {{ $data->count() }}
                    Pengunjung
                </h4>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-2">
            <a href="/" class="card-link btn btn-primary ">
                Kembali</a>
            @if (auth()->user()->role_id === 2 || auth()->user()->role_id == 3)
                <a href="{{ route('cetakBukuTamuMingguIni') }}" class="btn btn-primary shadow">
                    <i class="bi bi-printer-fill"></i> Cetak Pengunjung Minggu ini PDF</a>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-hover shadow rounded overflow-hidden">
                @include('components.haaderTable')
                @include('components.bodyTable')
            </table>
        </div>
        <div class="mb-5">{{ $data->links() }}
        </div>
    </div>
@endsection
