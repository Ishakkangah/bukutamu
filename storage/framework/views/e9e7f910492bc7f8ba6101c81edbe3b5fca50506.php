<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cetak Data</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- End layout styles -->
    

</head>

<body>
    <div class="container-scroller">
        <div class="container page-body-wrapper">
            <div class="card-body ">
                <div class="d-flex d-flex justify-content-around align-items-center align-middle ">
                    <img class="img-responsive" alt="iamgurdeeposahan" src="<?php echo e(asset('img/logo_pemda.png')); ?>"
                        style="width: 100px; border-radius: 43px;">
                    <div class="text-center col-md-8">
                        <h4 class="card-title">Rekap Buku Tamu Dinas Kominfo Kab. OKI</h4>
                        <h6 class="text-align:left">Jl. H. M. Yusuf Singedekane No.01, Muara Baru, Kec. Kayu Agung,
                            Kabupaten Ogan Komering Ilir, Sumatera Selatan 30651</h6>
                    </div>
                    <img class="img-responsive" alt="kominfo" src="<?php echo e(asset('img/logo_kominfo.png')); ?>"
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
    </div>
</body>

</html>
<?php /**PATH D:\buku_tamu\resources\views/testing.blade.php ENDPATH**/ ?>