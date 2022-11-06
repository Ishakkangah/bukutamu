


<?php $__env->startSection('content'); ?>
    <div class="container px-5 py-2" style="background: url('<?php echo e(asset('img/leaves.webp')); ?>')">
        <?php echo $__env->make('components.alertForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <h3 class="text-secondary mb-5"><i class="bi bi-pencil-fill"></i> UBAH DATA PENGUNJUNG</h3>
        <form action="<?php echo e(route('update', $datatamus->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="name" class="form-label text-muted">NAMA</label>
                <input type="text" class="form-control" name="name" id="name"
                    value="<?php echo e(old('name') ?? $datatamus->name); ?>" placeholder="Masukan nama">
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
                <label for="instansi" class="form-label  text-muted">INSTANSI</label>
                <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Masukan instansi"
                    value="<?php echo e(old('instansi') ?? $datatamus->instansi); ?>">
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
                <label for="perihal" class="form-label  text-muted">PERIHAL</label>
                <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Masukan perihal"
                    value="<?php echo e(old('perihal') ?? $datatamus->perihal); ?>">
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
                <label for="tujuan" class="form-label  text-muted">TUJUAN</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Masukan tujuan"
                    value="<?php echo e(old('tujuan') ?? $datatamus->tujuan); ?>">
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
                <label for="keterangan" class="form-label  text-muted">KETERANGAN</label>
                <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan"><?php echo e(old('keterangan') ?? $datatamus->keterangan); ?></textarea>
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
                <button type="submit" class="btn btn-primary mb-3">SIMPAN PERUBAHAN</button>
                <a href="/" class="btn btn-danger mb-3">BATAL</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/edit.blade.php ENDPATH**/ ?>