<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>KOMINFO OKI</title>
    
</head>

<body>
    <div id="app">
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>


</html>

<?php echo $__env->make('links.link_footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('links.link_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/bukutamu/resources/views/layouts/app.blade.php ENDPATH**/ ?>