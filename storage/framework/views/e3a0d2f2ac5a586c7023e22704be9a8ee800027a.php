<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table class="table">
        <thead style="background-color: green;">
            <tr>
                <th colspan="1" rowspan="2" style="text-align: center; display: grid; align-items: "></th>
                <th colspan="5" rowspan="2" style="text-align: center; font-size: 12px">
                    <strong>DINAS KOMUNIKASI DAN INFORMATIKA <br>
                        KABUPATEN OGAN KOMERING ILIR
                    </strong>
                </th>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr>
                <th></th>
            </tr>
            <tr style="border: 2px solid">
                <th style="text-align: center; background-color: yellow;"><strong>NAMA</strong></th>
                <th style="text-align: center; background-color: yellow;"><strong>INSTANSI</strong>
                </th>
                <th style="text-align: center; background-color: yellow;"><strong>PERIHAL</strong>
                </th>
                <th style="text-align: center; background-color: yellow;"><strong>TUJUAN</strong></th>
                <th style="text-align: center; background-color: yellow;"><strong>KETERANGAN</strong>
                </th>
                <th style="text-align: center; background-color: yellow;"><strong>TANGGAL</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $bukutamus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="text-align: center"><?php echo e($b->name); ?></td>
                    <td style="text-align: center"><?php echo e($b->instansi); ?></td>
                    <td style="text-align: center"><?php echo e($b->perihal); ?></td>
                    <td style="text-align: center"><?php echo e($b->tujuan); ?></td>
                    <td style="text-align: center"><?php echo e($b->keterangan); ?></td>
                    <td style="text-align: center"><?php echo e($b->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html>
<?php /**PATH D:\buku_tamu\resources\views/bukutamu/exportExcel.blade.php ENDPATH**/ ?>