<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <section>
            <div class="px-4 section-header bg-white py-2 rounded">
                <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="table-responsive">
                        <div class="mb-2">
                            <h6 class="text-muted"><?php echo e(now()->format('d-M-Y')); ?>

                            </h6>
                            <h6 class="text-muted">
                                Total : <?php echo e($data->count()); ?>

                            </h6>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <?php if(auth()->user()->role_id === 2 || auth()->user()->role_id == 3): ?>
                                
                                <a href="<?php echo e(route('cetakBukuTamuHariIni')); ?>" class="btn btn-primary shadow">
                                    <i class="bi bi-printer-fill"></i> Cetak PDF</a>
                            <?php endif; ?>
                        </div>
                        
                        <table class="table  table-hover rounded overflow-hidden">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bukutamu/resources/views/bukutamu/totalTamuHariIni.blade.php ENDPATH**/ ?>