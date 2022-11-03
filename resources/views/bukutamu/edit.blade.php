@extends('layouts.app')


@section('content')
    <div class="container px-5 py-2" style="background: url('{{ asset('img/leaves.webp') }}')">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        <h3 class="text-secondary mb-5"><i class="bi bi-person-plus-fill "></i> UBAH DATA PENGUNJUNG</h3>
        <form action="{{ route('update', $datatamus->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">NAMA</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name') ?? $datatamus->name }}" placeholder="Masukan nama">
                @error('name')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">INSTANSI</label>
                <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukan instansi"
                    value="{{ old('instansi') ?? $datatamus->instansi }}">
                @error('instansi')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label">PERIHAL</label>
                <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                    value="{{ old('perihal') ?? $datatamus->perihal }}">
                @error('perihal')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tujuan" class="form-label">TUJUAN</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                    value="{{ old('tujuan') ?? $datatamus->tujuan }}">
                @error('tujuan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">KETERANGAN</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan"
                    placeholder="Masukan keterangan" value="{{ old('keterangan') ?? $datatamus->keterangan }}">
                @error('keterangan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            {{-- image --}}
            <div class="mb-3">
                @if ($datatamus->thumbnail)
                    <div class="card" style="width: 10rem;">
                        <img src="{{ $datatamus->takeImage }}" class="card-img-top rounded shadow" width="200px">
                    </div>
                @else
                    <div class="alert alert-warning">Anda belum mengupload photo!</div>
                @endif
                <div class="form-group d-flex flex-column">
                    <label for="thumbnail">POTO</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail"
                        value="{{ old('thumbnail') }}">
                </div>
                @error('thumbnail')
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
    @include('layouts.footer')
@endsection
