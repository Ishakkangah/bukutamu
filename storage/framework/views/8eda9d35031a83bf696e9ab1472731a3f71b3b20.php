<div>
    <?php if(session()->has('success')): ?>
        <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
            <strong>OK.</strong> <?php echo e(session()->get('success')); ?>.
        </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\buku_tamu\resources\views/components/alert.blade.php ENDPATH**/ ?>