<?php $__env->startSection('content'); ?>
    <?php if(Auth::user()): ?>
        <?php if(Auth::user()->role_id !== 4): ?>
            <div class="container my-3 mb-5">
                <?php echo $__env->make('components.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php if(auth()->user()->role_id === 3 || auth()->user()->role_id === 2): ?>
                    <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end">
                        <form action="<?php echo e(route('cetakBukuTamuBerdasarkanPilihan')); ?>" class="d-flex">
                            <div class="form-group mx-2">
                                <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                                    value="<?php echo e(old('tanggal_mulai')); ?>">
                                <?php $__errorArgs = ['tanggal_mulai'];
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
                            <div class="form-group mx-2">
                                <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                                <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                                    value="<?php echo e(old('sampai_tanggal')); ?>">
                                <?php $__errorArgs = ['sampai_tanggal'];
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

                            <div class="form-group mx-2 d-flex flex-column justify-content-end">
                                <label></label>
                                <button type="submit" class="btn btn-primary shadow">
                                    <i class="bi bi-printer-fill"></i> CETAK PDF</button>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>

                <div class="col-auto mx-0 px-0 d-flex align-items-center border-dark mb-2 justify-content-end">
                    <a href="<?php echo e(route('totalTamuBulanIni')); ?>" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                            class="bi bi-people-fill"></i>
                        PENGUNJUNG MINGGU INI</a>
                    <a href="<?php echo e(route('totalTamuHariIni')); ?>" class="btn btn-primary fw-bold my-1 mx-1 shadow"> <i
                            class="bi bi-person-lines-fill"></i> PENGUNJUNG HARI INI</a>
                    <?php if(auth()->user()->role_id == 3 || auth()->user()->role_id == 4): ?>
                        <a href="<?php echo e(route('create')); ?>" class="btn btn-success fw-bold my-1 mx-1 shadow"> <i
                                class="bi bi-person-plus-fill"></i> PENGUNJUNG</a>
                    <?php endif; ?>
                </div>

                <div class="input-group mb-3 shadow-sm">
                    <?php if(Auth::user()): ?>
                        <form class="col-12 d-flex justify-content-between" action="<?php echo e(asset('cari')); ?>" method="get">
                            <input type="text" class="form-control" name="cari"
                                placeholder="Pencarian berdasarkan nama..">
                            <div class="input-group-append ">
                                <button class="btn btn-primary d-flex font-weight-bold" type="submit" id="button"><i
                                        class="bi bi-search mx-2"></i>
                                    CARI</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>

                <div class="table-responsive">
                    <table class="table  table-hover shadow rounded overflow-hidden">
                        <?php echo $__env->make('components.haaderTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <tbody>
                            <?php $i=1 ?>
                            <?php $__empty_1 = true; $__currentLoopData = $bukutamus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bukutamu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <th scope="row" class="text-center text-muted align-middle"><?php echo e($i++); ?></th>
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
                                <div class="alert alert-danger" role="alert">
                                    Tidak ada tamu !
                                </div>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="mb-5"><?php echo e($bukutamus->links()); ?>

                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/index.blade.php ENDPATH**/ ?>