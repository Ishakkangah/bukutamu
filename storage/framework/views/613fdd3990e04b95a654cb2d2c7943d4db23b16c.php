<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>KOMINFO OKI</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo e(asset('mycss/main.css')); ?>">
</head>

<body>
    <div id="app">
        <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="py-5">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

    </div>
</body>

<script src="<?php echo e(asset('js/webcam.js')); ?>"></script>

<script src="<?php echo e(asset('js/script.js')); ?>"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</html>
<?php /**PATH D:\buku_tamu\resources\views/layouts/app.blade.php ENDPATH**/ ?>