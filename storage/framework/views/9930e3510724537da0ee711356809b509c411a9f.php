


<?php $__env->startSection('content'); ?>
    <div class="container my-3 mb-5">
        <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="text-muted">Daftar pengunjung dari Tanggal <?php echo e($hariPertama->format('d-M-Y')); ?> -
                    <?php echo e($hariTerakhir->format('d-M-Y')); ?>

                </h4>
                <h4 class="text-muted">
                    Total : <?php echo e($data->count()); ?>

                    Pengunjung
                </h4>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-2">
            <a href="/" class="card-link btn btn-primary ">
                Kembali</a>
            <?php if(auth()->user()->role_id === 2 || auth()->user()->role_id == 3): ?>
                <a href="<?php echo e(route('cetakBukuTamuMingguIni')); ?>" class="btn btn-primary shadow">
                    <i class="bi bi-printer-fill"></i> Cetak PDF</a>
            <?php endif; ?>
        </div>
        <div class="table-responsive">
            <table class="table table-hover shadow rounded overflow-hidden">
                <?php echo $__env->make('components.haaderTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('components.bodyTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </table>
        </div>
        <div class="mb-5"><?php echo e($data->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/totalTamuBulanIni.blade.php ENDPATH**/ ?>