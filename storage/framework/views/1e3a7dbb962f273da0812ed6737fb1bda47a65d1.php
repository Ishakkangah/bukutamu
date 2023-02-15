<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            
            <div class="text-center col-md-8">
                <h2 class="card-title">REKAP DAFTAR PENGUNJUNG DISKOMINFO KAB. OKI</h2>
                <h3>Daftar pengunjung dari Tanggal <?php echo e($tanggal_mulai); ?> sampai
                    tanggal <?php echo e($sampai_tanggal); ?>

                </h3>
                <p>Jl. H. M. Yusuf Singedekane No.01, Muara Baru, Kec. Kayuagung,
                    Kabupaten Ogan Komering Ilir, Sumatera Selatan 30651</p>
            </div>
            
        </div>
        <table class="table table-bordered mt-5" c>
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
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td scope="row"><?php echo e($i++); ?></td>
                        <td><?php echo e(strtolower($d->name)); ?></td>
                        <td>
                            <img src="<?php echo e(public_path($d->takeImage)); ?>" alt="image" class="text-center shadow"
                                style="border-radius: 5px; margin-left: 5px" width="35px">
                        </td>
                        <td><?php echo e(strtolower($d->jenis_kelamin)); ?></td>
                        <td><?php echo e(strtolower($d->pendidikan)); ?></td>
                        <td><?php echo e($d->usia); ?></td>
                        <td><?php echo e(strtolower($d->pekerjaan)); ?></td>
                        <td><?php echo e(strtolower($d->created_at->format('d/m/Y'))); ?></td>
                        <td><?php echo e(strtolower($d->instansi)); ?></td>
                        <td><?php echo e(strtolower($d->perihal)); ?></td>
                        <td><?php echo e(strtolower($d->tujuan)); ?></td>
                        <td><?php echo e(strtolower($d->keterangan)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="mt-5 bg-danger">
            <div class=" bg-primary" style="width: 300px; padding:10px; float: right;">
                <div>
                    <div class="fw-bold text-capitalize"><?php echo e($jabatan); ?></div>
                    <div class="fw-bold mt-5 text-capitalize"><?php echo e($name); ?></div>
                    <div class="fw-bold">NIP : <?php echo e($nip); ?></div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<?php /**PATH E:\1. BELAJAR\buku_tamu\resources\views/bukutamu/cetakBukuTamuBerdasarkanPilihan.blade.php ENDPATH**/ ?>