


<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()): ?>
        <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <div class="container px-5 py-2 mb-5 mt-5" style="background: url('<?php echo e(asset('img/leaves.webp')); ?>')">

        <h3 class="text-secondary mb-5"><i class="bi bi-person-plus-fill"></i> MOHAN ISI DAFTAR PENGUNJUNG</h3>
        <?php echo $__env->make('components.alertForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo method_field('patch'); ?>
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label for="name" class="form-label text-muted">NAMA</label>
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
                <label for="instansi" class="form-label text-muted">INSTANSI</label>
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
                <label for="perihal" class="form-label text-muted">PERIHAL</label>
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
                <label for="tujuan" class="form-label text-muted">TUJUAN</label>
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
                <label for="keterangan" class="form-label text-muted">KETERANGAN</label>
                <textarea type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukan keterangan"
                    value="<?php echo e(old('keterangan')); ?>"></textarea>
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
            
            <div class="mb-5">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-6">
                        <div class="alert alert-warning  peringatan">Poto anda akan tampil disini!</div>
                        <div class="d-flex justify-content-start   position-relative">
                            <div class="card-img-top mr-2 rounded position-absolute" id="results">
                                
                            </div>
                            <div class="card-img-top mr-2 rounded position-absolute" id="my_camera">
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-success opacity-0 berhasil-upload">Poto berhasil di simpan!</div>
                        <div class="form-group row" style="flex-flow: row-reverse;">
                            <div class="pr-5 d-flex justify-content-end">
                                <input type="button" class=" btn btn-primary mx-2" value="BUKA KAMERA"
                                    onClick="buka_kamera()" />
                                <input type="button" class="btn btn-primary  mx-2" value="AMBIL PHOTO"
                                    onClick="ambil_photo()" />
                                <button type="submit" class="btn btn-success mx-2">SIMPAN</button>
                                <a href="/" class="btn btn-danger ">BATAL</a>
                                <input type="hidden" name="thumbnail" id="image_tag">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/create.blade.php ENDPATH**/ ?>