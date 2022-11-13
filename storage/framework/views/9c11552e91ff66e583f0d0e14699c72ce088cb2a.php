<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container d-flex flex-column mt-5">
        <h5 class="display-5  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>
        <div class="col-md- mx-auto py-auto col-md-6 shadow">
            <div class="card mx-auto">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <h4 class="mb-2 text-center text-muted ">MASUK</h4>
                        <div class="col-md-12">
                            <label for="username" class=" col-form-label text-md-end">Nama pengguna</label>
                            <div class="col-md-12">
                                <input id="username" type="text" class="form-control" name="username" required
                                    placeholder="Masukan username">
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2" role="alert">
                                            <?php echo e($message); ?></div>
                                    </small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="password" class="col-form-label text-md-end">Kata sandi</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required
                                    autocomplete="current-password" placeholder="Masukan kata sandi">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="text-danger">
                                        <div class=" bg-danger rounded text-white mt-1 px-2 py-2" role="alert">
                                            <?php echo e($message); ?></div>
                                    </small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <div class="col-md-12 mt-2 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mx-1">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/auth/login.blade.php ENDPATH**/ ?>