


<?php $__env->startSection('content'); ?>
    <div class="container my-3 mb-5">
        <h5 class="display-4  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
            KOMERING ILIR
        </h5>
        <div class="d-flex justify-content-between  align-items-center ">
            <div class="mb-2">
                <h4 class="text-muted">Daftar pengunjung Tanggal <?php echo e(now()->format('d-M-Y')); ?>

                </h4>
                <h4 class="text-muted">
                    Total : <?php echo e($data->count()); ?>

                    Pengunjung
                </h4>

            </div>
        </div>
        <div class="d-flex justify-content-between  mb-2">

            <a href="/" class="card-link btn btn-primary "><i class="bi bi-arrow-left-circle"></i>
                Kembali</a>
            <?php if(auth()->user()->role_id === 2 || auth()->user()->role_id == 3): ?>
                
                <a href="<?php echo e(route('cetakBukuTamuHariIni')); ?>" class="btn btn-primary shadow">
                    <i class="bi bi-printer-fill"></i> Cetak Tamu Hari ini PDF</a>
            <?php endif; ?>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover shadow rounded overflow-hidden ">
                <thead class="bg-primary text-white">
                    <tr class="border-red">
                        <th scope="col">#</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">INSTANSI</th>
                        <th scope="col">PERIHAL</th>
                        <th scope="col" class="text-center">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <th scope="row"><?php echo e($i++); ?></th>
                            <td><?php echo e($d->name); ?></td>
                            <td><?php echo e($d->created_at->format('d/m/Y')); ?></td>
                            <td><?php echo e($d->instansi); ?></td>
                            <td><?php echo e($d->perihal); ?></td>
                            <td>
                                
                                <div class="d-flex justify-content-around">
                                    <?php if(auth()->user()->role_id === 3): ?>
                                        <form action="<?php echo e(route('delete', $d->id)); ?>" method="post" class="">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="bg-danger px-2 py-2 rounded text-white border-0"
                                                onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                                    class="bi bi-archive-fill"></i></button>
                                        </form>
                                        
                                        <a href="<?php echo e(route('edit', $d->id)); ?>"
                                            class="bg-primary px-2 py-2 rounded text-white"><i
                                                class="bi bi-pencil-fill"></i></a>
                                    <?php endif; ?>
                                    
                                    <a href="<?php echo e(route('detailsTamu', $d->id)); ?>"
                                        class="bg-success px-2 py-2 rounded text-white"><i
                                            class="bi bi-emoji-heart-eyes"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="alert alert-danger" role="alert">
                            Tidak ada tamu hari ini!
                        </div>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views/bukutamu/totalTamuHariIni.blade.php ENDPATH**/ ?>