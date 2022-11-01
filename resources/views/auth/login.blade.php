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
                        <h4 class="mb-2 text-center">LOGIN</h4>
                        <div class="col-md-12">
                            <label for="email" class=" col-form-label text-md-end">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Masukan email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="password" class="col-form-label text-md-end">Kata sandi</label>
                            <div class="col-md-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Masukan kata sandi">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-12 mt-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-1">
                                Masuk
                            </button>

                            {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Lupa password
                                        </a>
                                    @endif --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
