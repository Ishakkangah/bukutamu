@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="{{ asset('img/logo_kominfo1.png') }}" alt="logo" width="280" class=" mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">DISKOMINFO
                            OKI</span>
                    </h4>
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate
                        autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input id="username" type="text" class="form-control" name="username">
                            @error('username')
                                <div class="bg-danger rounded text-white mt-1 px-2 py-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password">
                            @error('password')
                                <div class="bg-danger rounded text-white mt-1 px-2 py-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group text-right">
                            {{-- <a href="auth-forgot-password.html" class="float-left mt-3">
                                Lupa password
                            </a> --}}
                            <a href="/" class="btn btn-info btn-lg btn-icon icon-right">Home</a>
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Masuk
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
                        Copyright &copy; E-Goverment DISKOMINFO OKI
                        <div class="mt-2">
                            <span>Privacy Policy</span>
                            <div class="bullet"></div>
                            <span>Terms of Service</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                data-background="{{ asset('assets/img/unsplash/login-bg2.jpg') }}">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">@php
                                echo date('j F, Y');
                            @endphp</h1>
                            <h5 class="font-weight-normal text-muted-transparent">Ogan Komering Ilir, Sumatera Selatan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
