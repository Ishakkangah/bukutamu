<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <section>
            <div class="section-header bg-white py-2 rounded">
                <div class="container px-5 py-2 mt-5" style="background: url('<?php echo e(asset('img/leaves.webp')); ?>')">
                    <?php echo $__env->make('components.alertForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <h3 class="mb-5"><i class="bi bi-pencil-fill"></i> UBAH DATA PENGUNJUNG</h3>
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
                            <label for="usia" class="form-label text-muted">USIA</label>
                            <input type="text" class="form-control" name="usia" id="usia "
                                value="<?php echo e(old('usia') ?? $datatamus->usia); ?>" placeholder="Masukan usia">
                            <?php $__errorArgs = ['usia'];
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
                            <label for="jenis_kelamin" class="form-label text-muted">JENIS KELAMIN</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required="required">
                                <option disabled selected>Jenis Kelamin</option>

                                <option value="laki-laki" <?php echo e($datatamus->jenis_kelamin == 'laki-laki' ? 'selected' : ''); ?>>
                                    Laki-Laki</option>
                                <option value="perempuan" <?php echo e($datatamus->jenis_kelamin == 'perempuan' ? 'selected' : ''); ?>>
                                    Perempuan</option>
                            </select>
                            <?php $__errorArgs = ['jenis_kelamin'];
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
                            <label for="pendidikan" class="form-label text-muted">PENDIDIKAN</label>
                            <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                value="<?php echo e(old('pendidikan') ?? $datatamus->pendidikan); ?>" placeholder="Masukan pendidikan">
                            <?php $__errorArgs = ['pendidikan'];
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
                            <label for="pekerjaan" class="form-label text-muted">PEKERJAAN</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                value="<?php echo e(old('pekerjaan') ?? $datatamus->pekerjaan); ?>" placeholder="Masukan pekerjaan">
                            <?php $__errorArgs = ['usia'];
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
                            <input type="text" class="form-control" id="instansi" name="instansi"
                                placeholder="Masukan instansi" value="<?php echo e(old('instansi') ?? $datatamus->instansi); ?>">
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
                            <input type="text" class="form-control" id="perihal" name="perihal"
                                placeholder="Masukan perihal" value="<?php echo e(old('perihal') ?? $datatamus->perihal); ?>">
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
                            <select type="text" class="form-control" id="tujuan" name="tujuan"
                                value="<?php echo e(old('tujuan')); ?>" required="required">
                                <option disabled selected>Pilih tujuan</option>
                                <option value="Kepala Dinas" <?php echo e($datatamus->tujuan == 'Kepala Dinas' ? 'selected' : ''); ?>>
                                    Kepala Dinas</option>
                                <option value="Sekretaris" <?php echo e($datatamus->tujuan == 'Sekretaris' ? 'selected' : ''); ?>>
                                    Sekretaris</option>
                                <option value="Sekretariat" <?php echo e($datatamus->tujuan == 'Sekretariat' ? 'selected' : ''); ?>>
                                    Sekretariat</option>
                                <option value="Bidang Layanan E-Goverment"
                                    <?php echo e($datatamus->tujuan == 'Bidang Layanan E-Goverment' ? 'selected' : ''); ?>>Bidang
                                    Layanan E-Goverment</option>
                                <option value="Bidang Statistik & PIP"
                                    <?php echo e($datatamus->tujuan == 'Bidang Statistik & PIP' ? 'selected' : ''); ?>>Bidang
                                    Statistik & PIP</option>
                                <option value="Bidang TIK" <?php echo e($datatamus->tujuan == 'Bidang TIK' ? 'selected' : ''); ?>>
                                    Bidang TIK</option>
                                <option value="Bidang PKP" <?php echo e($datatamus->tujuan == 'Bidang PKP' ? 'selected' : ''); ?>>
                                    Bidang PKP</option>
                                <option value="Bidang Persandian"
                                    <?php echo e($datatamus->tujuan == 'Bidang Persandian' ? 'selected' : ''); ?>>Bidang
                                    Persandian</option>
                            </select>
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
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bukutamu/resources/views/bukutamu/edit.blade.php ENDPATH**/ ?>