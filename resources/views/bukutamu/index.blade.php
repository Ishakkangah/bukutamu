@extends('layouts.app')

@section('content')
    @if (Auth::user())
        @include('layouts.navigasi')
        <!-- Main Content -->
        <div class="main-content">
            {{-- DISINI CONTENT --}}
            <section>
                <div class="px-4 section-header  bg-white py-2 rounded">
                    @include('components.title')
                    @include('components.info')
                    @if (Auth::user())
                        <form class="col-12 d-flex justify-content-between  mx-0 px-0" action="{{ asset('cari') }}"
                            method="get">
                            <input type="text" class="form-control" name="cari"
                                placeholder="Pencarian berdasarkan nama..">
                            <div class="input-group-append ">
                                <button class="btn btn-primary d-flex font-weight-bold" type="submit" id="button">
                                    CARI</button>
                            </div>
                        </form>
                    @endif
                </div>

                {{-- TABLE --}}
                <div class="table-responsive">
                    <div class="input-group mb-3">
                        <table class="table  table-hover rounded overflow-hidden mt-3">
                            @include('components.haaderTable')
                            <tbody>
                                @php $i=1 @endphp
                                @forelse ($bukutamus as $bukutamu)
                                    <tr>
                                        <th scope="row" class="text-center text-muted align-middle">{{ $i++ }}
                                        </th>
                                        @if (auth()->user()->role_id === 3)
                                            <td class="align-middle">
                                                <div class="d-flex justify-content-center">
                                                    {{-- edit tamu --}}
                                                    <a href="{{ route('edit', $bukutamu->id) }}"
                                                        class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                                            class="bi bi-pencil-fill"></i></a>

                                                    {{-- hapus --}}
                                                    <form action="{{ route('delete', $bukutamu->id) }}" method="post"
                                                        class="">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="bg-danger px-2 py-2 rounded text-white border-0"
                                                            onclick="return confirm('Yakin ?')">


                                                            <i class="bi bi-archive-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @endif
                                        <td class="text-center">
                                            @if ($bukutamu->takeImage)
                                                <a href="{{ route('detailsTamu', $bukutamu->id) }}"
                                                    class="text-decoration-none text-muted">
                                                    <img src="{{ $bukutamu->takeImage ? $bukutamu->takeImage : asset('img/profile.jpg') }}"
                                                        class="rounded" alt="photo" width="40px">
                                                </a>
                                            @endif
                                        </td>
                                        <td class="text-center align-middle"> <a
                                                href="{{ route('detailsTamu', $bukutamu->id) }}"
                                                class="text-decoration-none text-muted">{{ strlen($bukutamu->name) > 10 ? substr($bukutamu->name, 0, 20) . '...' : strtoUpper($bukutamu->name) }}</a>
                                        </td>
                                        <td class="text-center text-muted align-middle"> <a
                                                href="{{ route('detailsTamu', $bukutamu->id) }}"
                                                class="text-decoration-none text-muted">
                                                {{ $bukutamu->created_at->format('d/m/Y') }}</a></td>
                                        <td class="text-center text-muted align-middle">
                                            <a href="{{ route('detailsTamu', $bukutamu->id) }}"
                                                class="text-decoration-none text-muted">
                                                {{ strlen($bukutamu->instansi) > 10 ? substr($bukutamu->instansi, 0, 10) . '...' : strtoUpper($bukutamu->instansi) }}
                                            </a>
                                        </td>
                                        <td class="text-center text-muted align-middle">
                                            <a href="{{ route('detailsTamu', $bukutamu->id) }}"
                                                class="text-decoration-none text-muted">
                                                {{ strlen($bukutamu->perihal) > 10 ? substr($bukutamu->perihal, 0, 20) . '...' : strtoupper($bukutamu->perihal) }}
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger mt-2" role="alert">
                                        Tidak ada tamu !
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-5">{{ $bukutamus->links() }}
                    </div>
                </div>
            </section>
        </div>
        @include('layouts.footer')
    @else
        {{-- START FORM TAMU --}}
        <div class="card_ku">
            <div class="circle position-absolute">
                <img src="{{ asset('img/logo_kominfo1.png') }}" alt="kominfo_logo">
            </div>
            <div class="row container mx-auto">
                <div class="col-md-6 colum_kanan">
                    <div>
                        <h2>Buku Tamu</h2>
                        <h3>Silahkan isi data anda di</h3>
                        <h3>Buku tamu digital kami</h3>
                    </div>
                    <div>
                        <img src="{{ asset('img/book.png') }}" class="buku" alt="book" />
                    </div>
                </div>
                <div class="col-md-6 colum_kiri">
                    <div class="wrapper">
                        @include('components.alertForm')
                        <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
                            <strong class="text-white">Sebelum mengisi kolom yang disediakan wajib mengambil gambar!
                        </div>

                        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class=""
                            autocomplete="off">
                            @method('patch')
                            @csrf
                            <div class="mb-3">
                                <div class=" d-flex justify-content-start">
                                    <input type="button" class=" btn btn-primary mx-2 bukaKamera tampilKamera"
                                        value="BUKA KAMERA" onClick="buka_kamera()" data-toggle="modal"
                                        data-target="#cameraModal" />
                                    <input type="hidden" name="thumbnail" id="image_tag">
                                    @error('thumbnail')
                                        <div class="text-danger">
                                            <div class="bg-danger rounded text-white px-2 py-2">
                                                Pastikan anda telah memasukan poto!</div>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama"
                                    required value="{{ old('name') }}">
                                @error('name')
                                    <small class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                        </div>
                                    </small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="instansi" id="instansi" required
                                    placeholder="Instansi asal" value="{{ old('instansi') }}">
                                @error('instansi')
                                    <small class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                        </div>
                                    </small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="perihal" name="perihal" required
                                    placeholder="Perihal" value="{{ old('perihal') }}">
                                @error('perihal')
                                    <small class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}
                                        </div>
                                    </small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <select type="text" class="form-control" id="tujuan" name="tujuan"
                                    value="{{ old('tujuan') }}" required="required">
                                    <option disabled selected>Pilih tujuan</option>
                                    <option value="Kepala Dinas" {{ old('tujuan') == 'Kepala Dinas' ? 'selected' : '' }}>
                                        Kepala Dinas</option>
                                    <option value="Sekretaris" {{ old('tujuan') == 'Sekretaris' ? 'selected' : '' }}>
                                        Sekretaris</option>
                                    <option value="Sekretariat" {{ old('tujuan') == 'Sekretariat' ? 'selected' : '' }}>
                                        Sekretariat</option>
                                    <option value="Bidang Layanan E-Goverment"
                                        {{ old('tujuan') == 'Bidang Layanan E-Goverment' ? 'selected' : '' }}>Bidang
                                        Layanan E-Goverment</option>
                                    <option value="Bidang Statistik & PIP"
                                        {{ old('tujuan') == 'Bidang Statistik & PIP' ? 'selected' : '' }}>Bidang
                                        Statistik & PIP</option>
                                    <option value="Bidang TIK" {{ old('tujuan') == 'Bidang TIK' ? 'selected' : '' }}>
                                        Bidang TIK</option>
                                    <option value="Bidang PKP" {{ old('tujuan') == 'Bidang PKP' ? 'selected' : '' }}>
                                        Bidang PKP</option>
                                    <option value="Bidang Persandian"
                                        {{ old('tujuan') == 'Bidang Persandian' ? 'selected' : '' }}>Bidang
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
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    placeholder="Nomor HP yang dapat dihubungi"
                                    style=" max-width:100%;min-height:50px;height:100%;width:100%;"
                                    value="{{ old('keterangan') }}" required>
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
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row" style="flex-flow: row-reverse;">
                                            <div class=" d-flex justify-content-end">
                                                <button type="submit" class="btn btn-success mx-2"
                                                    id="btnSimpanPoto">SIMPAN</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    echo date('j F, Y');
                                @endphp
                            </div>
                            {{-- END START --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODALCAMERA -->
        {{-- END FORM TAMU --}}




        {{-- Start modal camera --}}
        <div class="modal d-none" tabindex="-1" id="cameraModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="my_camera">
                        {{-- DISINI WEBCAM TAMPIL --}}
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <span class="btn btn-danger btnBatalAmbilGambarWebcam">BATAL</span>
                        <input type="button" class="btn btn-primary  mx-2" value="AMBIL PHOTO"
                            onClick="ambil_photo()" />
                    </div>
                </div>
            </div>
        </div>
        {{-- end modal camera --}}
    @endif
@endsection
