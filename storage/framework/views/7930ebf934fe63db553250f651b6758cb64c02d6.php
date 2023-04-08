<?php $__env->startSection('content'); ?>
<?php if(Auth::user()): ?>
<?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<div class="main-content">
    <section>
        <div class="section-header py-2 rounded">
            <div class="container px-5 py-2 mb-5 mt-5" style="background: url('<?php echo e(asset('img/leaves.webp')); ?>')">

                <h3 class="mb-5"><i class="bi bi-person-plus-fill"></i> MOHON ISI DAFTAR PENGUNJUNG</h3>
                <?php echo $__env->make('components.alertForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data" class="" autocomplete="off">
                    <?php echo method_field('patch'); ?>
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama" value="<?php echo e(old('name')); ?>" required>
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="instansi" id="instansi" placeholder="Instansi" value="<?php echo e(old('instansi')); ?>" required>
                        <?php $__errorArgs = ['instansi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="usia" name="usia" required placeholder="usia" value="<?php echo e(old('usia')); ?>">
                        <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?php echo e(old('jenis_kelamin')); ?>" required="required">
                            <option disabled selected>Jenis Kelamin</option>
                            <option value="laki-laki" <?php echo e(old('jenis_kelamin' == 'laki-laki' ? 'selected' : '')); ?>>
                                Laki-Laki</option>
                            <option value="perempuan" <?php echo e(old('jenis_kelamin' == 'perempuan' ? 'selected' : '')); ?>>
                                Perempuan</option>
                        </select>
                        <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan" required placeholder="pendidikan" value="<?php echo e(old('pendidikan')); ?>">
                        <?php $__errorArgs = ['pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>


                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required placeholder="perkerjaan" value="<?php echo e(old('perkerjaan')); ?>">
                        <?php $__errorArgs = ['pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>


                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" value="<?php echo e(old('perihal')); ?>" required>
                        <?php $__errorArgs = ['perihal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <select type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo e(old('tujuan')); ?>" required="required">
                            <option disabled selected>Pilih tujuan</option>
                            <option value="Kepala Dinas" <?php echo e(old('tujuan') == 'Kepala Dinas' ? 'selected' : ''); ?>>
                                Kepala Dinas</option>
                            <option value="Sekretaris" <?php echo e(old('tujuan') == 'Sekretaris' ? 'selected' : ''); ?>>
                                Sekretaris</option>
                            <option value="Sekretariat" <?php echo e(old('tujuan') == 'Sekretariat' ? 'selected' : ''); ?>>
                                Sekretariat</option>
                            <option value="Bidang Layanan E-Goverment" <?php echo e(old('tujuan') == 'Bidang Layanan E-Goverment' ? 'selected' : ''); ?>>Bidang
                                Layanan E-Goverment</option>
                            <option value="Bidang Statistik & PIP" <?php echo e(old('tujuan') == 'Bidang Statistik & PIP' ? 'selected' : ''); ?>>Bidang
                                Statistik & PIP</option>
                            <option value="Bidang TIK" <?php echo e(old('tujuan') == 'Bidang TIK' ? 'selected' : ''); ?>>
                                Bidang TIK</option>
                            <option value="Bidang PKP" <?php echo e(old('tujuan') == 'Bidang PKP' ? 'selected' : ''); ?>>
                                Bidang PKP</option>
                            <option value="Bidang Persandian" <?php echo e(old('tujuan') == 'Bidang Persandian' ? 'selected' : ''); ?>>Bidang
                                Persandian</option>
                        </select>
                        <?php $__errorArgs = ['tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control textarea1" id="keterangan" name="keterangan" placeholder="Keterangan" style=" max-width:100%;min-height:50px;height:100%;width:100%;" required><?php echo e(old('keterangan')); ?></textarea>
                        <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">
                            <div class="bg-danger rounded text-white mt-1 px-2 py-2"><?php echo e($message); ?>

                            </div>
                        </small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    
                    <!-- <div class="modal" tabindex="-1" id="cameraModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body" id="my_camera">
                                    
                                </div>
                                <div class="modal-footer bg-whitesmoke br">
                                    <span class="btn btn-danger btnBatalAmbilGambarWebcam">BATAL</span>
                                    <input type="button" class="btn btn-primary  mx-2" value="AMBIL PHOTO" onClick="ambil_photo()" />
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                    
                    <div class="mb-4">
                        <div class="row d-flex justify-content-between">
                            <div class="col-md-6">
                                <div class="peringatan">
                                </div>
                                <div class="d-flex justify-content-start   position-relative">
                                    <div class="card-img-top mr-2 rounded position-absolute" id="results">
                                        
                                    </div>
                                    <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger">
                                        <div class="bg-danger rounded text-white mt-1 px-2 py-2">
                                            Pastikan Anda telah membuka tombol kamara !</div>
                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row" style="flex-flow: row-reverse;">
                                    <div class=" d-flex justify-content-end">
                                        <input type="button" class=" btn btn-primary mx-2 bukaKamera tampilKamera" value="BUKA KAMERA" onClick="buka_kamera()" data-toggle="modal" data-target="#cameraModal" />
                                        <button type="submit" class="btn btn-success mx-2" id="btnSimpanPoto">SIMPAN</button>
                                        <input type="hidden" name="thumbnail" id="image_tag">
                                    </div>
                                </div>

                                <!-- MODAL BARU -->

                                <!-- Modal -->
                                <div class="modal fade" id="cameraModal" tabindex="-1" role="dialog" aria-labelledby="cameraModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ambil gambar</h5>
                                                <button type="button" class="close" data-dismiss="modal" onclick="batal_ambil_gambar()" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="my_camera">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" id="btnBatalAmbilGambarWebcam" data-dismiss="modal" onclick="batal_ambil_gambar()">Close</button>
                                                <button type="button" class="btn btn-primary" value="AMBIL PHOTO" onClick="ambil_photo()">Save changes</button>
                                            </div>
                                        </div>

                                    </div>
                                    
                </form>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bukutamu/resources/views/bukutamu/create.blade.php ENDPATH**/ ?>