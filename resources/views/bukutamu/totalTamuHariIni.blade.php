@extends('layouts.app')
@section('content')
    <div class="container my-3 mb-5">
        @include('components.title')
        <div class="d-flex justify-content-between  align-items-center ">
            <div class="mb-2">
                <h4 class="text-muted">Daftar pengunjung Tanggal {{ now()->format('d-M-Y') }}
                </h4>
                <h4 class="text-muted">
                    Total : {{ $data->count() }}
                    Pengunjung
                </h4>

            </div>
        </div>
        <div class="d-flex justify-content-between  mb-2">

            <a href="/" class="card-link btn btn-primary ">
                Kembali</a>
            @if (auth()->user()->role_id === 2 || auth()->user()->role_id == 3)
                {{-- CETAK TAMYU HARI INI PDF --}}
                <a href="{{ route('cetakBukuTamuHariIni') }}" class="btn btn-primary shadow">
                    <i class="bi bi-printer-fill"></i> Cetak Tamu Hari ini PDF</a>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-hover shadow rounded overflow-hidden">
                @include('components.haaderTable')
                @include('components.bodyTable')
            </table>
        </div>
    </div>
@endsection
