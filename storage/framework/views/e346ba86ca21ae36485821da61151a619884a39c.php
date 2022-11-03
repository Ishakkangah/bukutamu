


<?php $__env->startSection('content'); ?>
    <div class="container my-5" style="background: url('<?php echo e(asset('img/leaves.webp')); ?>')">

        <h3><i class="bi bi-person-plus-fill"></i> TAMBAH DATA PENGUNJUNG</h3>
        <div class="alert alert-success rounded shadow-sm">Harap di isi dengan sebenar-benar nya dikolom yang sudah
            disediakan</div>
        <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukan nama"
                    value="<?php echo e(old('name')); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?></div>
                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <div class="form-group d-flex flex-column">
                    <label for="thumbnail">Photo</label>
                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                </div>
                <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?></div>
                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="instansi" class="form-label">instansi</label>
                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Masukan instansi"
                    value="<?php echo e(old('instansi')); ?>">
                <?php $__errorArgs = ['instansi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?></div>
                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="perihal" class="form-label">perihal</label>
                <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                    value="<?php echo e(old('perihal')); ?>">
                <?php $__errorArgs = ['perihal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?></div>
                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="tujuan" class="form-label">tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                    value="<?php echo e(old('tujuan')); ?>">
                <?php $__errorArgs = ['tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?></div>
                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan"
                    placeholder="Masukan keterangan" value="<?php echo e(old('keterangan')); ?>">
                <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <small class="text-danger">
                        <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?></div>
                    </small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3 mr-2">SIMPAN</button>
                <a href="/" class="btn btn-danger mb-3">BATAL</a>
            </div>
        </form>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/create.blade.php ENDPATH**/ ?>