@extends('layouts.app')


@section('content')
    @include('layouts.navigasi')
    <div class="container px-5 py-2 mt-5" style="background: url('{{ asset('img/leaves.webp') }}')">
        @include('components.alertForm')

        <h3 class="text-secondary mb-5"><i class="bi bi-pencil-fill"></i> UBAH DATA PENGUNJUNG</h3>
        <form action="{{ route('update', $datatamus->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label text-muted">NAMA</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name') ?? $datatamus->name }}" placeholder="Masukan nama">
                @error('name')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label  text-muted">INSTANSI</label>
                <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukan instansi"
                    value="{{ old('instansi') ?? $datatamus->instansi }}">
                @error('instansi')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label  text-muted">PERIHAL</label>
                <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                    value="{{ old('perihal') ?? $datatamus->perihal }}">
                @error('perihal')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tujuan" class="form-label  text-muted">TUJUAN</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                    value="{{ old('tujuan') ?? $datatamus->tujuan }}">
                @error('tujuan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label  text-muted">KETERANGAN</label>
                <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan">{{ old('keterangan') ?? $datatamus->keterangan }}</textarea>
                @error('keterangan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">SIMPAN PERUBAHAN</button>
                <a href="/" class="btn btn-danger mb-3">BATAL</a>
            </div>
        </form>
    </div>
@endsection
