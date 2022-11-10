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
</head>

<body>
    <div class="container-fluid mx-auto my-5">
        <div class="d-flex d-flex justify-content-around align-items-center align-middle mt-5 ">
            
            <div class="text-center col-md-8">
                <h2 class="card-title">REKAP DAFTAR PENGUNJUNG DISKOMINFO KAB. OKI</h2>
                <h3>Daftar pengunjung dari Tanggal <?php echo e($hariPertama->format('d-M-Y')); ?> -
                    <?php echo e($hariTerakhir->format('d-M-Y')); ?>

                </h3>
                <p>Jl. H. M. Yusuf Singedekane No.01, Muara Baru, Kec. Kayuagung,
                    Kabupaten Ogan Komering Ilir, Sumatera Selatan 30651</p>
            </div>
            
        </div>
        <table class="table table-bordered  mt-5">
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
                <?php $i=1 ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($i++); ?></th>
                        <td><?php echo e(strtolower($d->name)); ?></td>
                        <td><?php echo e(strtolower($d->created_at->format('d/m/Y'))); ?></td>
                        <td><?php echo e(strtolower($d->instansi)); ?></td>
                        <td><?php echo e(strtolower($d->perihal)); ?></td>
                        <td><?php echo e(strtolower($d->tujuan)); ?></td>
                        <td><?php echo e(strtolower($d->keterangan)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    </div>
</body>

</html>
<?php /**PATH D:\buku_tamu\resources\views/bukutamu/cetakBukuTamuMingguIni.blade.php ENDPATH**/ ?>