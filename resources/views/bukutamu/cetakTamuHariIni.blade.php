<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="container-fluid mx-auto my-5">
        <div class="d-flex d-flex justify-content-around align-items-center align-middle mt-5 ">
            <!-- <img alt="iamgurdeeposahan" src="{{ asset('img/logo_pemda.svg') }}" style="width: 100px;"> -->
            <div class="text-center col-md-8">
                <h2 class="card-title">REKAP DAFTAR PENGUNJUNG DISKOMINFO KAB. OKI</h2>
                <h3>Daftar pengunjung Tanggal {{ now()->format('d-M-Y') }}
                </h3>
                <p>Jl. H. M. Yusuf Singedekane No.01, Muara Baru, Kec. Kayu Agung,
                    Kabupaten Ogan Komering Ilir, Sumatera Selatan 30651</p>
            </div>
            <!-- <img alt="kominfo" src="{{ asset('img/logo_kominfo.svg') }}" style="width: 200px;"> -->
        </div>
        <table class="table table-bordered  mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">POTO</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">PENDIDIKAN</th>
                    <th scope="col">UMUR</th>
                    <th scope="col">PEKERJAAN</th>
                    <th scope="col">TANGGAL</th>
                    <th scope="col">INSTANSI</th>
                    <th scope="col">PERIHAL</th>
                    <th scope="col">TUJUAN</th>
                    <th scope="col">KETERANGAN</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ strtolower($d->name) }}</td>
                    <td>
                        <img src="{{ public_path($d->takeImage) }}" alt="image" class="text-center shadow" style="border-radius: 5px; margin-left: 5px" width="35px">
                    </td>
                    <td>{{ strtolower($d->jenis_kelamin) }}</td>
                    <td>{{ strtolower($d->pendidikan) }}</td>
                    <td>{{ $d->usia }}</td>
                    <td>{{ strtolower($d->pekerjaan) }}</td>
                    <td>{{ strtolower($d->created_at->format('d/m/Y')) }}</td>
                    <td>{{ strtolower($d->instansi) }}</td>
                    <td>{{ strtolower($d->perihal) }}</td>
                    <td>{{ strtolower($d->tujuan) }}</td>
                    <td>{{ strtolower($d->keterangan) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>