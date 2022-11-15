

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="container my-3 mb-5">
            <h5 class="display-4  text-muted text-center mb-5">DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN OGAN
                KOMERING ILIR
            </h5>


            <div class="table-responsive">
                <table class="table table-bordered table-hover shadow rounded overflow-hidden ">
                    <thead class="bg-primary text-white">
                        <tr class="border-red">
                            <th scope="col">#</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">TANGGAL</th>
                            <th scope="col">INSTANSI</th>
                            <th scope="col">PERIHAL</th>
                            <th scope="col">tujuan</th>
                            <th scope="col">keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $i=1 ?>
                                <th scope="row"><?php echo e($i++); ?></th>
                                <td><?php echo e($d->name); ?></td>
                                <td><?php echo e($d->created_at->diffForHumans()); ?></td>
                                <td><?php echo e($d->instansi); ?></td>
                                <td><?php echo e($d->perihal); ?></td>
                                <td> <?php echo e($d->tujuan); ?></td>
                                <td> <?php echo e($d->keterangan); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\buku_tamu\resources\views\bukutamu\dataTamu_pdf.blade.php ENDPATH**/ ?>