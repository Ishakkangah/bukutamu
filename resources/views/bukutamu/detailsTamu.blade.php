@extends('layouts.app')

@section('content')
    @include('layouts.navigasi')
    <div class="container my-2 mt-5">
        <H2 class="card-title mb-3 font-weigh-bold text-secondary">INFO PENGUNJUNG</H2>
        <div class="card mb-3 overflow-hidden shadow">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-md-4">
                    <img src="{{ $dataTamu->takeImage ? $dataTamu->takeImage : asset('img/profile.jpg') }}"
                        class="rounded w-100" style="    height: 400px; object-fit: cover; object-position: center;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <table class="table table-borderless text-muted">
                            <tbody>
                                <tr class="align-middle">
                                    <td>NAMA</td>
                                    <td>
                                        <H5>{{ strtoUpper($dataTamu->name) }}</H5>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>INSTANSI</td>
                                    <td>{{ strtoupper($dataTamu->instansi) }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>PERIHAL</td>
                                    <td>{{ strtoupper($dataTamu->perihal) }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>KETERANGAN</td>
                                    <td>{{ strtoupper($dataTamu->keterangan) }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>TANGGAL KEDATANGAN</td>
                                    <td>{{ strtoupper($dataTamu->created_at) }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="card-body mx-0 px-0">
                            <a href="/" class="card-link btn btn-primary">
                                Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
