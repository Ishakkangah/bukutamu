@extends('layouts.app')


@section('content')
    <div class="container my-5">

        <h3>Tambah tamu baru</h3>
        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukan email"
                    value="{{ old('name') }}">
                @error('name')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Masukan instansi"
                    value="{{ old('instansi') }}">
                @error('instansi')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label">perihal</label>
                <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                    value="{{ old('perihal') }}">
                @error('perihal')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tujuan" class="form-label">tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                    value="{{ old('tujuan') }}">
                @error('tujuan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan"
                    placeholder="Masukan keterangan" value="{{ old('keterangan') }}">
                @error('keterangan')
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                    </small>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection
