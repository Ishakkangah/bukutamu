

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <section>
            <div class="section-header bg-white py-2 rounded">
                <div class="container my-2 mt-5">
                    <H2 class="card-title mb-3 font-weigh-bold">INFO PENGUNJUNG</H2>
                    <div class="card mb-3 overflow-hidden">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-md-4">
                                <img src="<?php echo e($dataTamu->takeImage ? $dataTamu->takeImage : asset('img/profile.jpg')); ?>"
                                    class="rounded w-100"
                                    style="    height: 400px; object-fit: cover; object-position: center;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr class="align-middle">
                                                <td>NAMA</td>
                                                <td>
                                                    <H5><?php echo e(strtoUpper($dataTamu->name)); ?></H5>
                                                </td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>INSTANSI</td>
                                                <td><?php echo e(strtoupper($dataTamu->instansi)); ?></td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>PERIHAL</td>
                                                <td><?php echo e(strtoupper($dataTamu->perihal)); ?></td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>KETERANGAN</td>
                                                <td><?php echo e(strtoupper($dataTamu->keterangan)); ?></td>
                                            </tr>
                                            <tr class="align-middle">
                                                <td>TANGGAL KEDATANGAN</td>
                                                <td><?php echo e(strtoupper($dataTamu->created_at)); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="card-body mx-0 px-0">
                                        <a href="/" class="card-link btn btn-primary">
                                            Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/detailsTamu.blade.php ENDPATH**/ ?>