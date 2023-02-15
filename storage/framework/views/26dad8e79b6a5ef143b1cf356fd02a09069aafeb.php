<ul class="sidebar-menu mt-2">
    <li class="menu-header">Menu</li>
    <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Lihat Pengunjung</span></a>
        <ul class="dropdown-menu">
            <li><a class="nav-link" href="/">Semua</a>
            </li>
            <li><a class="nav-link" href="<?php echo e(route('totalTamuHariIni')); ?>">Sekarang</a>
            </li>
            <li><a class="nav-link" href="<?php echo e(route('totalTamuBulanIni')); ?>">Minggu</a>
            </li>
            <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tampilModalByFilter">
                    Filter data</a>
        </ul>
    </li>
    
    <?php if(auth()->user()->role_id === 3 || auth()->user()->role_id == 2): ?>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-excel"></i><span>Download
                    PDF</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('cetakBukuTamuHariIni')); ?>">Sekarang</a>
                </li>
                <li><a class="nav-link" href="<?php echo e(route('cetakBukuTamuMingguIni')); ?>">Minggu</a>
                </li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#pdfDownloadModal">
                        Filter</a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
    
    <?php if(auth()->user()->role_id === 3 || auth()->user()->role_id == 2): ?>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-pdf"></i><span>Download
                    Excel</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('exportExcelHariIni')); ?>">Sekarang</a>
                </li>
                <li><a class="nav-link" href="<?php echo e(route('exportExcelMungguIni')); ?>">Minggu</a>
                </li>
                <li><a class="nav-link" href="#" data-toggle="modal" data-target="#excellDownloadModal">
                        Filter</a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
    
    <?php if(auth()->user()->role_id === 3): ?>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-plus"></i><span>Buat
                    Pengunjung</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo e(route('create')); ?>">Tambah Pengunjung</a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
    <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <span>Keluar</span>
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </li>
</ul>


<div class="modal fade" tabindex="-1" role="dialog" id="excellDownloadModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download Excell</h5>
            </div>
            <div class="container mt-2">
                <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
                    <strong class="text-white">Silahkan masukan tanggal untuk download excell!
                </div>
            </div>
            <form action="<?php echo e(route('cetakExcelBukuTamuBerdasarkanFilter')); ?>" class="d-flex flex-column">
                <div class="modal-body">
                    <div class="form-group mx-2">
                        <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                            value="<?php echo e(old('tanggal_mulai')); ?>">
                        <?php $__errorArgs = ['tanggal_mulai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="form-group mx-2">
                        <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                            value="<?php echo e(old('sampai_tanggal')); ?>">
                        <?php $__errorArgs = ['sampai_tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="bg-whitesmoke mx-0 br float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="pdfDownloadModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Download PDF</h5>
            </div>
            <div class="container mt-2">
                <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
                    <strong class="text-white">Silahkan masukan tanggal untuk download pdf!
                </div>
            </div>
            <form action="<?php echo e(route('cetakBukuTamuBerdasarkanPilihan')); ?>" class="d-flex flex-column">
                <div class="modal-body">
                    <div class="form-group mx-2">
                        <label for="tanggal_mulai">Mulai tanggal</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                            value="<?php echo e(old('tanggal_mulai')); ?>">
                        <?php $__errorArgs = ['tanggal_mulai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mx-2">
                        <label for="sampai_tanggal">Sampai tanggal</label>
                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                            value="<?php echo e(old('sampai_tanggal')); ?>">
                        <?php $__errorArgs = ['sampai_tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-group mx-2">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Nama<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="<?php echo e(old('name')); ?>">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="nip">NIP<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="nip" name="nip"
                                        value="<?php echo e(old('nip')); ?>">
                                    <?php $__errorArgs = ['nip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                                        value="<?php echo e(old('jabatan')); ?>">
                                    <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-whitesmoke mx-0 br float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="tampilModalByFilter">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Rentang waktu</h5>
            </div>
            <div class="container mt-2">
                <div class="alert alert-warning alert-dismissible fade show text-white" role="alert">
                    <strong class="text-white">Silahkan masukan tanggal untuk menampilkan data!
                </div>
            </div>

            <form action="<?php echo e(route('tampilkanBukuTamuBerdasarkanFilter')); ?>" class="d-flex flex-column">
                <div class="modal-body">
                    <div class="form-group mx-2">
                        <label for="tanggal_mulai text-muted">Mulai tanggal</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai"
                            value="<?php echo e(old('tanggal_mulai')); ?>">
                        <?php $__errorArgs = ['tanggal_mulai'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="form-group mx-2">
                        <label for="sampai_tanggal text-muted">Sampai tanggal</label>
                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal"
                            value="<?php echo e(old('sampai_tanggal')); ?>">
                        <?php $__errorArgs = ['sampai_tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="bg-whitesmoke mx-0 br float-right">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Lihat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH E:\1. BELAJAR\buku_tamu\resources\views/layouts/menu.blade.php ENDPATH**/ ?>