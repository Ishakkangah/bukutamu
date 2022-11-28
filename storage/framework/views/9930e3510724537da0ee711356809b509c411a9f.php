


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <section>
            <div class="px-4 section-header bg-white py-2 rounded">
                <div class="container my-3 mb-5">
                    <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <h6 class="text-muted"><?php echo e($hariPertama->format('d-M-Y')); ?> -
                                <?php echo e($hariTerakhir->format('d-M-Y')); ?>

                            </h6>
                            <h6 class="text-muted">
                                Total : <?php echo e($data->count()); ?>

                            </h6>
                        </div>
                        <div>
                            <?php if(auth()->user()->role_id === 2 || auth()->user()->role_id == 3): ?>
                                <a href="<?php echo e(route('cetakBukuTamuMingguIni')); ?>" class="btn btn-primary shadow">
                                    <i class="bi bi-printer-fill"></i> Cetak PDF</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover rounded overflow-hidden">
                            <?php echo $__env->make('components.haaderTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('components.bodyTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </table>
                    </div>
                    <div class="mb-5"><?php echo e($data->links()); ?>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/totalTamuBulanIni.blade.php ENDPATH**/ ?>