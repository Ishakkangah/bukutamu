


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <section>
            <div class="px-4 section-header bg-white py-2 rounded">
                <div class="container my-3 mb-5">
                    <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <?php if($tanggal_mulai && $sampai_tanggal): ?>
                                <h6 class="text-muted"><?php echo e(Carbon\Carbon::parse($tanggal_mulai)->format('d-M-Y')); ?> -
                                    <?php echo e(Carbon\Carbon::parse($sampai_tanggal)->format('d-M-Y')); ?>

                                </h6>
                                <h6 class="text-muted">
                                    Total : <?php echo e($data->count()); ?>

                                </h6>
                            <?php endif; ?>
                        </div>
                        <div>
                            
                            <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end"
                                id="tampilkanBukuTamuBerdasarkanFilter">
                                <form action="<?php echo e(route('tampilkanBukuTamuBerdasarkanFilter')); ?>" class="d-flex">
                                    <div class="form-group mx-2">
                                        <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                            value="<?php echo e(old('tanggal_mulai')); ?>">
                                    </div>
                                    <div class="form-group mx-2">
                                        <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                                            value="<?php echo e(old('sampai_tanggal')); ?>">
                                    </div>

                                    <div class="form-group mx-2 d-flex flex-column justify-content-end">
                                        <button type="submit" class="btn btn-info shadow mb-1" id="tampilkanFilter">
                                            TAMPILKAN DATA</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover rounded overflow-hidden">
                            <?php echo $__env->make('components.haaderTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('components.bodyTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </table>
                    </div>
                    
                </div>
            </div>
    </div>
    </section>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\1. BELAJAR\buku_tamu\resources\views/bukutamu/filter.blade.php ENDPATH**/ ?>