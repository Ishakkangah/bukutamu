<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cetak Data</title>
    {{-- <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- End layout styles -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" /> --}}

</head>

<body>
    <div class="container-scroller">
        <div class="container page-body-wrapper">
            <div class="card-body ">
                <div class="d-flex d-flex justify-content-around align-items-center align-middle ">
                    <img class="img-responsive" alt="iamgurdeeposahan" src="{{ asset('img/logo_pemda.png') }}"
                        style="width: 100px; border-radius: 43px;">
                    <div class="text-center col-md-8">
                        <h4 class="card-title">Rekap Buku Tamu Dinas Kominfo Kab. OKI</h4>
                        <h6 class="text-align:left">Jl. H. M. Yusuf Singedekane No.01, Muara Baru, Kec. Kayu Agung,
                            Kabupaten Ogan Komering Ilir, Sumatera Selatan 30651</h6>
                    </div>
                    <img class="img-responsive" alt="kominfo" src="{{ asset('img/logo_kominfo.png') }}"
                        style="width: 200px; border-radius: 43px;">
                </div>
                <h6>Tanggal:</h6>
                <hr>
                <table class="table table-bordered" id="table2">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">INSTANSI</th>
                            <th scope="col">PERIHAL</th>
                            <th scope="col">TUJUAN</th>
                            <th scope="col">KETERANGAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php $i=1 @endphp
                        @foreach ($data as $d)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ strtolower($d->name) }}</td>
                                <td>{{ strtolower($d->created_at->format('d/m/Y')) }}</td>
                                <td>{{ strtolower($d->instansi) }}</td>
                                <td>{{ strtolower($d->perihal) }}</td>
                                <td>{{ strtolower($d->tujuan) }}</td>
                                <td>{{ strtolower($d->keterangan) }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>

            </div>

            {{-- <script type='text/javascript'>
                window.print()
            </script>

            <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <script src="{{ asset('js/jquery.cookie.js') }}" type="text/javascript"></script>
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="{{ asset('js/off-canvas.js') }}"></script>
            <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('js/misc.js') }}"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <script src="{{ asset('js/dashboard.js') }}"></script>
            <script src="{{ asset('js/todolist.js') }}"></script> --}}
        </div>
    </div>
</body>

</html>
