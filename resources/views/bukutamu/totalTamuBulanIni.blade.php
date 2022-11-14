@extends('layouts.app')


@section('content')
    @include('layouts.navigasi')
    <div class="main-content">
        <section>
            <div class="px-4 section-header bg-white py-2 rounded">
                <div class="container my-3 mb-5">
                    @include('components.title')
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted">{{ $hariPertama->format('d-M-Y') }} -
                                {{ $hariTerakhir->format('d-M-Y') }}
                            </h6>
                            <h6 class="text-muted">
                                Total : {{ $data->count() }}
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <a href="/" class="card-link btn btn-primary ">
                            Kembali</a>
                        @if (auth()->user()->role_id === 2 || auth()->user()->role_id == 3)
                            <a href="{{ route('cetakBukuTamuMingguIni') }}" class="btn btn-primary shadow">
                                <i class="bi bi-printer-fill"></i> Cetak PDF</a>
                        @endif
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover rounded overflow-hidden">
                            @include('components.haaderTable')
                            @include('components.bodyTable')
                        </table>
                    </div>
                    <div class="mb-5">{{ $data->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.footer')
@endsection
