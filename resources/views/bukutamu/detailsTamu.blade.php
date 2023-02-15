@extends('layouts.app')

@section('content')
    @include('layouts.navigasi')
    <div class="main-content">
        <section>
            <div class="section-header py-2 rounded">
                <div class="container my-2 mt-5">
                    <H2 class="card-title mb-3 font-weigh-bold" style="color:#78828a">INFO PENGUNJUNG</H2>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="card">

                                    <img src="{{ $dataTamu->takeImage ? $dataTamu->takeImage : asset('img/profile.jpg') }}"
                                        alt="tamu">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Nama : {{ strtoUpper($dataTamu->name) }}
                                        </li>
                                        <li class="list-group-item">Usia : {{ strtoUpper($dataTamu->usia) }}
                                            Tahun
                                        </li>
                                        <li class="list-group-item"> Jenis Kelamin :
                                            {{ strtoUpper($dataTamu->jenis_kelamin) }}</li>
                                        <li class="list-group-item">{{ strtoUpper($dataTamu->pendidikan) }}
                                        </li>
                                        <li class="list-group-item">Pekerjaan :
                                            {{ strtoUpper($dataTamu->pekerjaan) }}
                                        </li>
                                        <li class="list-group-item">Institusi :
                                            {{ strtoupper($dataTamu->instansi) }}
                                        </li>
                                        <li class="list-group-item">Perihal :
                                            {{ strtoupper($dataTamu->perihal) }}</li>
                                        <li class="list-group-item">Keterangan :
                                            {{ strtoupper($dataTamu->keterangan) }}</li>
                                        <li class="list-group-item">Waktu kedatngan :
                                            {{ strtoupper($dataTamu->created_at) }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
