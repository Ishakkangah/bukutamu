<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<!-- Bootstrap CSS V 4.6 -->



<!-- Styles -->
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

<link rel="stylesheet" href="<?php echo e(asset('css/myCss.css')); ?>">



<!-- General CSS Files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

<!-- Template CSS -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('assets/css/components.css')); ?>" />



<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\buku_tamu\resources\views/links/link_header.blade.php ENDPATH**/ ?>