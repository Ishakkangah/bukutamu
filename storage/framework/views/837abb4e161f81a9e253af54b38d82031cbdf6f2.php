<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()): ?>
        <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main Content -->
        <div class="main-content">
            
            <section>
                <div class="px-4 section-header  bg-white py-2 rounded">
                    <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('components.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(Auth::user()): ?>
                        <form class="col-12 d-flex justify-content-between  mx-0 px-0" action="<?php echo e(asset('cari')); ?>"
                            method="get">
                            <input type="text" class="form-control" name="cari"
                                placeholder="Pencarian berdasarkan nama..">
                            <div class="input-group-append ">
                                <button class="btn btn-primary d-flex font-weight-bold" type="submit" id="button">
                                    CARI</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>

                
                <div class="table-responsive">
                    <div class="input-group mb-3">
                        <table class="table  table-hover rounded overflow-hidden mt-3">
                            <?php echo $__env->make('components.haaderTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <tbody>
                                <?php $i=1 ?>
                                <?php $__empty_1 = true; $__currentLoopData = $bukutamus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bukutamu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row" class="text-center text-muted align-middle"><?php echo e($i++); ?>

                                        </th>
                                        <?php if(auth()->user()->role_id === 3): ?>
                                            <td class="align-middle">
                                                <div class="d-flex justify-content-center">
                                                    
                                                    <a href="<?php echo e(route('edit', $bukutamu->id)); ?>"
                                                        class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                                            class="bi bi-pencil-fill"></i></a>

                                                    
                                                    <form action="<?php echo e(route('delete', $bukutamu->id)); ?>" method="post"
                                                        class="">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button type="submit"
                                                            class="bg-danger px-2 py-2 rounded text-white border-0"
                                                            onclick="return confirm('Yakin ?')">


                                                            <i class="bi bi-archive-fill"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                        <td class="text-center">
                                            <?php if($bukutamu->takeImage): ?>
                                                <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                    class="text-decoration-none text-muted">
                                                    <img src="<?php echo e($bukutamu->takeImage ? $bukutamu->takeImage : asset('img/profile.jpg')); ?>"
                                                        class="rounded" alt="photo" width="40px">
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center align-middle"> <a
                                                href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted"><?php echo e(strlen($bukutamu->name) > 10 ? substr($bukutamu->name, 0, 20) . '...' : strtoUpper($bukutamu->name)); ?></a>
                                        </td>
                                        <td class="text-center text-muted align-middle"> <a
                                                href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted">
                                                <?php echo e($bukutamu->created_at->format('d/m/Y')); ?></a></td>
                                        <td class="text-center text-muted align-middle">
                                            <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted">
                                                <?php echo e(strlen($bukutamu->instansi) > 10 ? substr($bukutamu->instansi, 0, 10) . '...' : strtoUpper($bukutamu->instansi)); ?>

                                            </a>
                                        </td>
                                        <td class="text-center text-muted align-middle">
                                            <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted">
                                                <?php echo e(strlen($bukutamu->perihal) > 10 ? substr($bukutamu->perihal, 0, 20) . '...' : strtoupper($bukutamu->perihal)); ?>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger mt-2" role="alert">
                                        Tidak ada tamu !
                                    </div>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-5"><?php echo e($bukutamus->links()); ?>

                    </div>
                </div>
            </section>
        </div>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        
        <div class="card_ku">
            <div class="circle position-absolute">
                <img src="<?php echo e(asset('img/logo_kominfo1.png')); ?>" alt="kominfo_logo">
            </div>
            <div class="row container mx-auto">
                <div class="col-md-6 colum_kanan">
                    <div>
                        <h2>Buku Tamu</h2>
                        <h3>Silahkan isi data anda di</h3>
                        <h3>Buku tamu digital kami</h3>
                    </div>
                    <div>
                        <img src="<?php echo e(asset('img/book.png')); ?>" class="buku" alt="book" />
                    </div>
                </div>
                <div class="col-md-6 colum_kiri">
                    <div class="wrapper">
                        <?php echo $__env->make('components.alertForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
                            <strong class="text-white">Sebelum mengisi kolom yang disediakan wajib mengambil gambar!
                        </div>

                        <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data" class=""
                            autocomplete="off">
                            <?php echo method_field('patch'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <div class=" d-flex justify-content-start">
                                    <input type="button" class=" btn btn-primary mx-2 bukaKamera tampilKamera"
                                        value="BUKA KAMERA" onClick="buka_kamera()" data-toggle="modal"
                                        data-target="#cameraModal" />
                                    <input type="hidden" name="thumbnail" id="image_tag">
                                    <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="text-danger">
                                            <div class="bg-danger rounded text-white px-2 py-2">
                                                Pastikan anda telah memasukan poto!</div>
                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nama"
                                    required value="<?php echo e(old('name')); ?>">
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
                                <input type="text" class="form-control" name="instansi" id="instansi" required
                                    placeholder="Instansi asal" value="<?php echo e(old('instansi')); ?>">
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
                                <input type="text" class="form-control" id="perihal" name="perihal" required
                                    placeholder="Perihal" value="<?php echo e(old('perihal')); ?>">
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
                                <select type="text" class="form-control" id="tujuan" name="tujuan"
                                    value="<?php echo e(old('tujuan')); ?>" required="required">
                                    <option disabled selected>Pilih tujuan</option>
                                    <option value="Kepala Dinas" <?php echo e(old('tujuan') == 'Kepala Dinas' ? 'selected' : ''); ?>>
                                        Kepala Dinas</option>
                                    <option value="Sekretaris" <?php echo e(old('tujuan') == 'Sekretaris' ? 'selected' : ''); ?>>
                                        Sekretaris</option>
                                    <option value="Sekretariat" <?php echo e(old('tujuan') == 'Sekretariat' ? 'selected' : ''); ?>>
                                        Sekretariat</option>
                                    <option value="Bidang Layanan E-Goverment"
                                        <?php echo e(old('tujuan') == 'Bidang Layanan E-Goverment' ? 'selected' : ''); ?>>Bidang
                                        Layanan E-Goverment</option>
                                    <option value="Bidang Statistik & PIP"
                                        <?php echo e(old('tujuan') == 'Bidang Statistik & PIP' ? 'selected' : ''); ?>>Bidang
                                        Statistik & PIP</option>
                                    <option value="Bidang TIK" <?php echo e(old('tujuan') == 'Bidang TIK' ? 'selected' : ''); ?>>
                                        Bidang TIK</option>
                                    <option value="Bidang PKP" <?php echo e(old('tujuan') == 'Bidang PKP' ? 'selected' : ''); ?>>
                                        Bidang PKP</option>
                                    <option value="Bidang Persandian"
                                        <?php echo e(old('tujuan') == 'Bidang Persandian' ? 'selected' : ''); ?>>Bidang
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
                                <input type="text" class="form-control" id="keterangan" name="keterangan"
                                    placeholder="Nomor HP yang dapat dihubungi"
                                    style=" max-width:100%;min-height:50px;height:100%;width:100%;"
                                    value="<?php echo e(old('keterangan')); ?>" required>
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
                            
                            <div class="mb-4">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6">
                                        <div class="peringatan">
                                        </div>
                                        <div class="d-flex justify-content-start   position-relative">
                                            <div class="card-img-top mr-2 rounded position-absolute" id="results">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row" style="flex-flow: row-reverse;">
                                            <div class=" d-flex justify-content-end">
                                                <button type="submit" class="btn btn-success mx-2"
                                                    id="btnSimpanPoto">SIMPAN</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    echo date('j F, Y');
                                ?>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODALCAMERA -->
        




        
        <div class="modal d-none" tabindex="-1" id="cameraModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body" id="my_camera">
                        
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <span class="btn btn-danger btnBatalAmbilGambarWebcam">BATAL</span>
                        <input type="button" class="btn btn-primary  mx-2" value="AMBIL PHOTO"
                            onClick="ambil_photo()" />
                    </div>
                </div>
            </div>
        </div>
        
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/index.blade.php ENDPATH**/ ?>