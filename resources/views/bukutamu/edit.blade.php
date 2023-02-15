@extends('layouts.app')
@section('content')
    @include('layouts.navigasi')
    <div class="main-content">
        <section>
            <div class="section-header bg-white py-2 rounded">
                <div class="container px-5 py-2 mt-5" style="background: url('{{ asset('img/leaves.webp') }}')">
                    @include('components.alertForm')
                    <h3 class="mb-5"><i class="bi bi-pencil-fill"></i> UBAH DATA PENGUNJUNG</h3>
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
                            <label for="usia" class="form-label text-muted">USIA</label>
                            <input type="text" class="form-control" name="usia" id="usia "
                                value="{{ old('usia') ?? $datatamus->usia }}" placeholder="Masukan usia">
                            @error('usia')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label text-muted">JENIS KELAMIN</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required="required">
                                <option disabled selected>Jenis Kelamin</option>

                                <option value="laki-laki" {{ $datatamus->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                    Laki-Laki</option>
                                <option value="perempuan" {{ $datatamus->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label text-muted">PENDIDIKAN</label>
                            <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                value="{{ old('pendidikan') ?? $datatamus->pendidikan }}" placeholder="Masukan pendidikan">
                            @error('pendidikan')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label text-muted">PEKERJAAN</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                value="{{ old('pekerjaan') ?? $datatamus->pekerjaan }}" placeholder="Masukan pekerjaan">
                            @error('usia')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="instansi" class="form-label  text-muted">INSTANSI</label>
                            <input type="text" class="form-control" id="instansi" name="instansi"
                                placeholder="Masukan instansi" value="{{ old('instansi') ?? $datatamus->instansi }}">
                            @error('instansi')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="perihal" class="form-label  text-muted">PERIHAL</label>
                            <input type="text" class="form-control" id="perihal" name="perihal"
                                placeholder="Masukan perihal" value="{{ old('perihal') ?? $datatamus->perihal }}">
                            @error('perihal')
                                <small class="text-danger">
                                    <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                                </small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tujuan" class="form-label  text-muted">TUJUAN</label>
                            <select type="text" class="form-control" id="tujuan" name="tujuan"
                                value="{{ old('tujuan') }}" required="required">
                                <option disabled selected>Pilih tujuan</option>
                                <option value="Kepala Dinas" {{ $datatamus->tujuan == 'Kepala Dinas' ? 'selected' : '' }}>
                                    Kepala Dinas</option>
                                <option value="Sekretaris" {{ $datatamus->tujuan == 'Sekretaris' ? 'selected' : '' }}>
                                    Sekretaris</option>
                                <option value="Sekretariat" {{ $datatamus->tujuan == 'Sekretariat' ? 'selected' : '' }}>
                                    Sekretariat</option>
                                <option value="Bidang Layanan E-Goverment"
                                    {{ $datatamus->tujuan == 'Bidang Layanan E-Goverment' ? 'selected' : '' }}>Bidang
                                    Layanan E-Goverment</option>
                                <option value="Bidang Statistik & PIP"
                                    {{ $datatamus->tujuan == 'Bidang Statistik & PIP' ? 'selected' : '' }}>Bidang
                                    Statistik & PIP</option>
                                <option value="Bidang TIK" {{ $datatamus->tujuan == 'Bidang TIK' ? 'selected' : '' }}>
                                    Bidang TIK</option>
                                <option value="Bidang PKP" {{ $datatamus->tujuan == 'Bidang PKP' ? 'selected' : '' }}>
                                    Bidang PKP</option>
                                <option value="Bidang Persandian"
                                    {{ $datatamus->tujuan == 'Bidang Persandian' ? 'selected' : '' }}>Bidang
                                    Persandian</option>
                            </select>
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
            </div>
        </section>
    </div>
@endsection
