<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="main-content">
        <section>
            <div class="section-header py-2 rounded">
                <div class="container my-2 mt-5">
                    <H2 class="card-title mb-3 font-weigh-bold" style="color:#78828a">INFO PENGUNJUNG</H2>
                    <div class="card mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="card">

                                    <img src="<?php echo e($dataTamu->takeImage ? $dataTamu->takeImage : asset('img/profile.jpg')); ?>"
                                        alt="tamu">
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Nama : <?php echo e(strtoUpper($dataTamu->name)); ?>

                                        </li>
                                        <li class="list-group-item">Usia : <?php echo e(strtoUpper($dataTamu->usia)); ?>

                                            Tahun
                                        </li>
                                        <li class="list-group-item"> Jenis Kelamin :
                                            <?php echo e(strtoUpper($dataTamu->jenis_kelamin)); ?></li>
                                        <li class="list-group-item"><?php echo e(strtoUpper($dataTamu->pendidikan)); ?>

                                        </li>
                                        <li class="list-group-item">Pekerjaan :
                                            <?php echo e(strtoUpper($dataTamu->pekerjaan)); ?>

                                        </li>
                                        <li class="list-group-item">Institusi :
                                            <?php echo e(strtoupper($dataTamu->instansi)); ?>

                                        </li>
                                        <li class="list-group-item">Perihal :
                                            <?php echo e(strtoupper($dataTamu->perihal)); ?></li>
                                        <li class="list-group-item">Keterangan :
                                            <?php echo e(strtoupper($dataTamu->keterangan)); ?></li>
                                        <li class="list-group-item">Waktu kedatngan :
                                            <?php echo e(strtoupper($dataTamu->created_at)); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bukutamu/resources/views/bukutamu/detailsTamu.blade.php ENDPATH**/ ?>