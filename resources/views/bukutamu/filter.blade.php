@extends('layouts.app')


@section('content')
    @include('layouts.navigasi')
    <div class="main-content">
        <section>
            <div class="px-4 section-header bg-white py-2 rounded">
                <div class="container my-3 mb-5">
                    @include('components.title')
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            @if ($tanggal_mulai && $sampai_tanggal)
                                <h6 class="text-muted">{{ Carbon\Carbon::parse($tanggal_mulai)->format('d-M-Y') }} -
                                    {{ Carbon\Carbon::parse($sampai_tanggal)->format('d-M-Y') }}
                                </h6>
                                <h6 class="text-muted">
                                    Total : {{ $data->count() }}
                                </h6>
                            @endif
                        </div>
                        <div>
                            @if (auth()->user()->role_id === 2 || auth()->user()->role_id === 3)
                                <div
                                    class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end">
                                    <form action="{{ route('cetakBukuTamuBerdasarkanPilihan') }}" class="d-flex">
                                        <div class="form-group mx-2">
                                            <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                                            <input type="date" class="form-control" id="tanggal_mulai"
                                                name="tanggal_mulai" value="{{ old('tanggal_mulai') }}">
                                            @error('tanggal_mulai')
                                                <small class="text-danger">
                                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                                    </div>
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="form-group mx-2">
                                            <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                                            <input type="date" class="form-control" id="sampai_tanggal"
                                                name="sampai_tanggal" value="{{ old('sampai_tanggal') }}">
                                            @error('sampai_tanggal')
                                                <small class="text-danger">
                                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                                    </div>
                                                </small>
                                            @enderror
                                        </div>

                                        <div class="form-group mx-2 d-flex flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary shadow">
                                                <i class="bi bi-printer-fill"></i> CETAK PDF</button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                            <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end"
                                id="tampilkanBukuTamuBerdasarkanFilter">
                                <form action="{{ route('tampilkanBukuTamuBerdasarkanFilter') }}" class="d-flex">
                                    <div class="form-group mx-2">
                                        <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                            value="{{ old('tanggal_mulai') }}">
                                    </div>
                                    <div class="form-group mx-2">
                                        <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                                            value="{{ old('sampai_tanggal') }}">
                                    </div>

                                    <div class="form-group mx-2 d-flex flex-column justify-content-end">
                                        <button type="submit" class="btn btn-info shadow" id="tampilkanFilter">
                                            <i class="bi bi-eye-fill"></i> TAMPILKAN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover rounded overflow-hidden">
                            @include('components.haaderTable')
                            @include('components.bodyTable')
                        </table>
                    </div>
                    {{-- <div class="mb-5">{{ $data->links() }} --}}
                </div>
            </div>
    </div>
    </section>
    </div>
    @include('layouts.footer')
@endsection
