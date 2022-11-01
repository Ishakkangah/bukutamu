@extends('layouts.app')

@section('content')
    <div class="container">
        <h5 class="display-5  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>

        <div class="col-md- mx-auto py-auto col-md-6 shadow">
            <div class="card mx-auto">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 class="mb-2 text-center">DAFTAR</h4>
                        <div class="col-md-12">
                            <label for="name" class="col-md-12 col-form-label ">Nama</label>

                            <div class="col-md-12">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="email" class="col-md-12 col-form-label ">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="password" class="col-md-12 col-form-label ">Kata sandi</label>

                            <div class="col-md-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="password-confirm" class="col-md-12 col-form-label ">Konfirmasi kata sandi
                            </label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-md-12 mt-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-1">
                                DAFTAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
