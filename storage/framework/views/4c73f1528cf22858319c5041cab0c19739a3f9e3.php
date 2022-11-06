<tbody>
    <?php $i=1 ?>
    <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <th scope="row" class="text-center text-muted align-middle"><?php echo e($i++); ?></th>
            <td class="align-middle">
                
                <div class="d-flex justify-content-center">
                    <?php if(auth()->user()->role_id === 3): ?>
                        <form action="<?php echo e(route('delete', $d->id)); ?>" method="post" class="">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="bg-danger px-2 py-2 rounded text-white border-0"
                                onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                    class="bi bi-archive-fill"></i></button>
                        </form>
                        
                        <a href="<?php echo e(route('edit', $d->id)); ?>" class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                class="bi bi-pencil-fill"></i></a>
                    <?php endif; ?>
                    
                    <a href="<?php echo e(route('detailsTamu', $d->id)); ?>" class="bg-success px-2 py-2 rounded text-white"><i
                            class="bi bi-eye"></i></a>
                </div>
            </td>
            <td class="text-center">
                <?php if($d->takeImage): ?>
                    <img src="<?php echo e($d->takeImage); ?>" class="rounded" alt="photo" width="50px">
                <?php endif; ?>
            </td>
            <td class="text-center align-middle"><a href="<?php echo e(route('detailsTamu', $d->id)); ?>"
                    class="text-muted text-decoration-none "><?php echo e(strtoupper($d->name)); ?></a>
            </td>
            <td class="text-muted text-center align-middle"><?php echo e($d->created_at->format('d/m/Y')); ?></td>
            <td class="text-muted text-center align-middle"><?php echo e(strtoupper($d->instansi)); ?></td>
            <td class="text-muted text-center align-middle"><?php echo e(strtoupper($d->perihal)); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="alert alert-danger" role="alert">
            Tidak ada tamu hari ini!
        </div>
    <?php endif; ?>
</tbody>
<?php /**PATH D:\buku_tamu\resources\views/components/bodyTable.blade.php ENDPATH**/ ?>