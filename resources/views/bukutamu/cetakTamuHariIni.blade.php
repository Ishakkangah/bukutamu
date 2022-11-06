<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div>
        <h5 class=" text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>
        <div class="text-small text-center mb-1"> Alamat Kantor, Jl. Letjen, Jl. H. M. Yusuf Singedekane No.01, Jua Jua,
            Kec. Kayu
            Agung, Kabupaten Ogan
            Komering Ilir, Sumatera Selatan</div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAMA</th>
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
    </div>
</body>

</html>
