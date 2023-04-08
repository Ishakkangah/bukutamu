@extends('layouts.app')


@section('content')
@if (Auth::user())
@include('layouts.navigasi')
@endif
<div class="main-content">
    <section>
        <div class="section-header py-2 rounded">
            <div class="container px-5 py-2 mb-5 mt-5" style="background: url('{{ asset('img/leaves.webp') }}')">

                <h3 class="mb-5"><i class="bi bi-person-plus-fill"></i> MOHON ISI DAFTAR PENGUNJUNG</h3>
                @include('components.alertForm')
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="" autocomplete="off">
                    @method('patch')
                    @csrf

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama" value="{{ old('name') }}" required>
                        @error('name')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi" value="{{ old('instansi') }}" required>
                        @error('instansi')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="usia" name="usia" required placeholder="usia" value="{{ old('usia') }}">
                        @error('usia')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="{{ old('jenis_kelamin') }}" required="required">
                            <option disabled selected>Jenis Kelamin</option>
                            <option value="laki-laki" {{ old('jenis_kelamin' == 'laki-laki' ? 'selected' : '') }}>
                                Laki-Laki</option>
                            <option value="perempuan" {{ old('jenis_kelamin' == 'perempuan' ? 'selected' : '') }}>
                                Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" required placeholder="pendidikan" value="{{ old('pendidikan') }}">
                        @error('pendidikan')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}

                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required placeholder="perkerjaan" value="{{ old('perkerjaan') }}">
                        @error('pekerjaan')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}

                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" value="{{ old('perihal') }}" required>
                        @error('perihal')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <select type="text" class="form-control" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required="required">
                            <option disabled selected>Pilih tujuan</option>
                            <option value="Kepala Dinas" {{ old('tujuan') == 'Kepala Dinas' ? 'selected' : '' }}>
                                Kepala Dinas</option>
                            <option value="Sekretaris" {{ old('tujuan') == 'Sekretaris' ? 'selected' : '' }}>
                                Sekretaris</option>
                            <option value="Sekretariat" {{ old('tujuan') == 'Sekretariat' ? 'selected' : '' }}>
                                Sekretariat</option>
                            <option value="Bidang Layanan E-Goverment" {{ old('tujuan') == 'Bidang Layanan E-Goverment' ? 'selected' : '' }}>Bidang
                                Layanan E-Goverment</option>
                            <option value="Bidang Statistik & PIP" {{ old('tujuan') == 'Bidang Statistik & PIP' ? 'selected' : '' }}>Bidang
                                Statistik & PIP</option>
                            <option value="Bidang TIK" {{ old('tujuan') == 'Bidang TIK' ? 'selected' : '' }}>
                                Bidang TIK</option>
                            <option value="Bidang PKP" {{ old('tujuan') == 'Bidang PKP' ? 'selected' : '' }}>
                                Bidang PKP</option>
                            <option value="Bidang Persandian" {{ old('tujuan') == 'Bidang Persandian' ? 'selected' : '' }}>Bidang
                                Persandian</option>
                        </select>
                        @error('tujuan')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control textarea1" id="keterangan" name="keterangan" placeholder="Keterangan" style=" max-width:100%;min-height:50px;height:100%;width:100%;" required>{{ old('keterangan') }}</textarea>
                        @error('keterangan')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                            </div>
                        </small>
                        @enderror
                    </div>

                    {{-- Start modal camera --}}
                    <!-- <div class="modal" tabindex="-1" id="cameraModal">
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
                    </div> -->
                    {{-- end modal camera --}}
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
                                    <div class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">
                                            Pastikan Anda telah membuka tombol kamara !</div>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row" style="flex-flow: row-reverse;">
                                    <div class=" d-flex justify-content-end">
                                        <input type="button" class=" btn btn-primary mx-2 bukaKamera tampilKamera" value="BUKA KAMERA" onClick="buka_kamera()" data-toggle="modal" data-target="#cameraModal" />
                                        <button type="submit" class="btn btn-success mx-2" id="btnSimpanPoto">SIMPAN</button>
                                        <input type="hidden" name="thumbnail" id="image_tag">
                                    </div>
                                </div>

                                <!-- MODAL BARU -->

                                <!-- Modal -->
                                <div class="modal fade" id="cameraModal" tabindex="-1" role="dialog" aria-labelledby="cameraModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ambil gambar</h5>
                                                <button type="button" class="close" data-dismiss="modal" onclick="batal_ambil_gambar()" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="my_camera">
                                                {{-- DISINI WEBCAM TAMPIL --}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" id="btnBatalAmbilGambarWebcam" data-dismiss="modal" onclick="batal_ambil_gambar()">Close</button>
                                                <button type="button" class="btn btn-primary" value="AMBIL PHOTO" onClick="ambil_photo()">Save changes</button>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- END START --}}
                </form>
            </div>
        </div>
    </section>
</div>
@endsection