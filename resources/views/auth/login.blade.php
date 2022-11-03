@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column">

        <h5 class="display-5  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>
        <div class="col-md- mx-auto py-auto col-md-6 shadow">
            <div class="card mx-auto">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4 class="mb-2 text-center ">MASUK</h4>
                        <div class="col-md-12">
                            <label for="username" class=" col-form-label text-md-end">Nama pengguna</label>
                            <div class="col-md-12">
                                <select id="username" class="form-control " name="username" value="{{ old('username') }}">
                                    <option disabled selected>Pilih salah satu!</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->username }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                @error('username')
                                    <small class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2" role="alert">
                                            {{ $message }}</div>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="password" class="col-form-label text-md-end">Kata sandi</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required
                                    autocomplete="current-password" placeholder="Masukan kata sandi">

                                @error('password')
                                    <small class="text-danger">
                                        <div class=" bg-danger rounded text-white mt-1 px-2 py-2" role="alert">
                                            {{ $message }}</div>
                                    </small>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12 mt-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-1">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
