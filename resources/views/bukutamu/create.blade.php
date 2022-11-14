@extends('layouts.app')


@section('content')
    @if (Auth::user())
        @include('layouts.navigasi')
    @endif
    <div class="main-content">
        <section>
            <div class="section-header py-2 rounded">
                <div class="container px-5 py-2 mb-5 mt-5" style="background: url('{{ asset('img/leaves.webp') }}')">

                    <h3 class="mb-5"><i class="bi bi-person-plus-fill"></i> MOHAN ISI DAFTAR PENGUNJUNG</h3>
                    @include('components.alertForm')
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="">
                        @method('patch')
                        @csrf

                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama"
                                value="{{ old('name') }}" required>
                            @error('name')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                    </div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi"
                                value="{{ old('instansi') }}" required>
                            @error('instansi')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                    </div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal"
                                value="{{ old('perihal') }}" required>
                            @error('perihal')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                    </div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan"
                                value="{{ old('tujuan') }}" required>
                            @error('tujuan')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                    </div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea type="text" class="form-control textarea1" id="keterangan" name="keterangan" placeholder="Keterangan"
                                style=" max-width:100%;min-height:50px;height:100%;width:100%;" value="{{ old('keterangan') }}" required></textarea>
                            @error('keterangan')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                    </div>
                                </small>
                            @enderror
                        </div>
                        {{-- START WEBCAM --}}
                        <div class="mb-4">
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-6">
                                    <div class="peringatan">
                                    </div>
                                    <div class="d-flex justify-content-start   position-relative">
                                        <div class="card-img-top mr-2 rounded position-absolute" id="results">
                                            {{-- Hasil gambar tampil disini --}}
                                        </div>
                                        @error('thumbnail')
                                            <small class="text-danger">
                                                <div class="bg-danger rounded text-white mt-1 px-2 py-2">
                                                    {{ $message }}</div>
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row" style="flex-flow: row-reverse;">
                                        <div class=" d-flex justify-content-end">
                                            <input type="button" class=" btn btn-primary mx-2 bukaKamera tampilKamera"
                                                value="BUKA KAMERA" onClick="buka_kamera()" data-toggle="modal"
                                                data-target="#cameraModal" />
                                            <button type="submit" class="btn btn-success mx-2"
                                                class="btnSimpanPoto">SIMPAN</button>
                                            <input type="hidden" name="thumbnail" id="image_tag">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- END START --}}
                    </form>
                </div>
            </div>
        </section>
    </div>
    {{-- Start modal camera --}}
    <div class="modal d-none" tabindex="-1" id="cameraModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" id="my_camera">
                    {{-- DISINI WEBCAM TAMPIL --}}
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <span class="btn btn-danger btnBatalAmbilGambarWebcam">BATAL</span>
                    <input type="button" class="btn btn-primary  mx-2" value="AMBIL PHOTO" onClick="ambil_photo()" />
                </div>
            </div>
        </div>
    </div>
    {{-- end modal camera --}}
@endsection
