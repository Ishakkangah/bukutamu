<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pengunjung hari ini</h4>
                </div>
                <div class="card-body">
                    <?php echo e($totalTamuHariIni); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pengunjung Minggu ini</h4>
                </div>
                <div class="card-body">
                    <?php echo e($totalTamuMingguIni); ?>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Pengunjung bulan ini</h4>
                </div>
                <div class="card-body">
                    <?php echo e($totalTamuBulanIni); ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total admin</h4>
                </div>
                <div class="card-body">
                    <?php echo e($totalAdmin); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\buku_tamu\resources\views\components\info.blade.php ENDPATH**/ ?>