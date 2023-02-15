<?php if(Auth::user()): ?>
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li>
                        <a href="/" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                class="fas fa-bars text-white"></i></a>
                    </li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle">
                    
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="<?php echo e(asset('assets/img/avatar/avatar-1.png')); ?>"
                            class="rounded-circle mr-1" />
                        <div class="d-sm-none d-lg-inline-block text-white"><?php echo e(auth()->user()->name); ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?php echo e(route('logout')); ?>" class="dropdown-item has-icon"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                            <i class="far fa-user"></i> Keluar
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand mt-2">
                    <a href="/"><img src="<?php echo e(asset('img/logo_kominfo1.png')); ?>" alt="diskomimfo_oki"
                            width="180px" /></a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="/"><img src="<?php echo e(asset('img/logo_pemda.png')); ?>" alt="diskomimfo_oki"
                            width="30px" /></a>
                </div>
                
                <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </aside>
        </div>
    </div>
<?php else: ?>
    <?php echo $__env->make('components.alertForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php echo $__env->make('bukutamu.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH E:\1. BELAJAR\buku_tamu\resources\views/layouts/navigasi.blade.php ENDPATH**/ ?>