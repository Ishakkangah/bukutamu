@extends('layouts.app')

@section('content')
    @if (Auth::user())
        @include('layouts.navigasi')
        <!-- Main Content -->
        <div class="main-content">
            {{-- DISINI CONTENT --}}
            <section>
                <div class="section-header  bg-white py-2 rounded">
                    @include('components.alert')
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
        <div class="container px-5 py-2 mb-5 mt-5" style="background: url('{{ asset('img/leaves.webp') }}')">

            <h3 class="mb-5"><i class="bi bi-person-plus-fill"></i> MOHAN ISI DAFTAR PENGUNJUNG</h3>
            @include('components.alertForm')
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label text-muted">NAMA</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukan nama"
                        value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="instansi" class="form-label text-muted">INSTANSI</label>
                    <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Masukan instansi"
                        value="{{ old('instansi') }}">
                    @error('instansi')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="perihal" class="form-label text-muted">PERIHAL</label>
                    <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                        value="{{ old('perihal') }}">
                    @error('perihal')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="tujuan" class="form-label text-muted">TUJUAN</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                        value="{{ old('tujuan') }}">
                    @error('tujuan')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                        </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label text-muted">KETERANGAN</label>
                    <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan"
                        value="{{ old('keterangan') }}"></textarea>
                    @error('keterangan')
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">{{ $message }}</div>
                        </small>
                    @enderror
                </div>
                {{-- START WEBCAM --}}
                <div class="mb-5">
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-6">
                            <div class="alert alert-warning  peringatan">Poto anda akan tampil disini!</div>
                            <div class="d-flex justify-content-start   position-relative">
                                <div class="card-img-top mr-2 rounded position-absolute" id="results">
                                    {{-- <img src="{{ asset('img/nikita.jpg') }}" class="card-img-top shadow" alt="Preview Photo"> --}}
                                </div>
                                <div class="card-img-top mr-2 rounded position-absolute" id="my_camera">
                                    @error('thumbnail')
                                        <small class="text-danger">
                                            <div class="bg-danger rounded text-white mt-1 px-2 py-2">
                                                {{ $message }}</div>
                                        </small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="alert alert-success opacity-0 berhasil-upload">Poto berhasil di simpan!
                            </div>
                            <div class="form-group row" style="flex-flow: row-reverse;">
                                <div class="pr-5 d-flex justify-content-end">
                                    <input type="button" class=" btn btn-primary mx-2" value="BUKA KAMERA"
                                        onClick="buka_kamera()" />
                                    <input type="button" class="btn btn-primary  mx-2" value="AMBIL PHOTO"
                                        onClick="ambil_photo()" />
                                    <button type="submit" class="btn btn-success mx-2">SIMPAN</button>
                                    <a href="/" class="btn btn-danger ">BATAL</a>
                                    <input type="hidden" name="thumbnail" id="image_tag">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                {{-- END START --}}
            </form>
        </div>
    @endif
@endsection
