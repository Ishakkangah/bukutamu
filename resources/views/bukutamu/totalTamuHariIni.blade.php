@extends('layouts.app')

@section('content')
    @include('layouts.navigasi')
    <div class="main-content">
        <section>
            <div class="section-header bg-white py-2 rounded">
                @include('components.title')
                <div class="d-flex justify-content-between align-items-center">
                    <div class="table-responsive">
                        <div class="mb-2">
                            <h6 class="text-muted">{{ now()->format('d-M-Y') }}
                            </h6>
                            <h6 class="text-muted">
                                Total : {{ $data->count() }}
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="/" class="card-link btn btn-primary ">
                                Kembali</a>
                            @if (auth()->user()->role_id === 2 || auth()->user()->role_id == 3)
                                {{-- CETAK TAMYU HARI INI PDF --}}
                                <a href="{{ route('cetakBukuTamuHariIni') }}" class="btn btn-primary shadow">
                                    <i class="bi bi-printer-fill"></i> Cetak PDF</a>
                            @endif
                        </div>
                        {{-- TABLE --}}
                        <table class="table  table-hover rounded overflow-hidden">
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
