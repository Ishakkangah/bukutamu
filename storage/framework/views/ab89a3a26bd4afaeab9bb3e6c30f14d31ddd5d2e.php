

<?php $__env->startSection('content'); ?>
    <div class="container my-2">
        <H2 class="card-title mb-3 font-weigh-bold text-secondary">INFO PENGUNJUNG</H2>
        <div class="card mb-3 overflow-hidden shadow">
            <div class="row no-gutters ">
                <div class="col-md-4">
                    <img src="<?php echo e($dataTamu->takeImage ? $dataTamu->takeImage : asset('img/profile.jpg')); ?>"
                        class="rounded w-100" style="    height: 400px; object-fit: cover; object-position: center;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold text-muted">Nama :<?php echo e(strtoupper($dataTamu->name)); ?>

                            </li>
                            <li class="list-group-item text-muted">Instansi : <?php echo e(strtoupper($dataTamu->instansi)); ?></li>
                            <li class="list-group-item text-muted">Perihal : <?php echo e(strtoupper($dataTamu->perihal)); ?></li>
                            <li class="list-group-item text-muted">Kunjungan :
                                <?php echo e(strtoupper($dataTamu->created_at->diffForHumans())); ?>

                            </li>
                            <li class="list-group-item text-muted">Tujuan : <?php echo e(strtoupper($dataTamu->tujuan)); ?></li>
                            <li class="list-group-item text-muted">Keterangan : <?php echo e(strtoupper($dataTamu->keterangan)); ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="/" class="card-link btn btn-primary">
                                Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/detailsTamu.blade.php ENDPATH**/ ?>