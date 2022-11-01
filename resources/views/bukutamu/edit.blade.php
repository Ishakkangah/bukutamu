@extends('layouts.app')


@section('content')
    <div class="container my-2">

        <h3>Ubah data tamu</h3>
        <form action="{{ route('update', $datatamus->id) }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">nama</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="{{ old('name') ?? $datatamus->name }}" placeholder="Masukan nama">
                @error('name')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">instansi</label>
                <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukan instansi"
                    value="{{ old('instansi') ?? $datatamus->instansi }}">
                @error('instansi')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label">perihal</label>
                <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                    value="{{ old('perihal') ?? $datatamus->perihal }}">
                @error('perihal')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tujuan" class="form-label">tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                    value="{{ old('tujuan') ?? $datatamus->tujuan }}">
                @error('tujuan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan"
                    placeholder="Masukan keterangan" value="{{ old('keterangan') ?? $datatamus->keterangan }}">
                @error('keterangan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">UBAH</button>
            </div>
        </form>
    </div>
    @include('layouts.footer')
@endsection
