<?php if(Auth::user()): ?>
    

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('layouts.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Main Content -->
        <div class="main-content">
            
            <section>
                <div class="px-4 section-header  bg-white py-2 rounded">
                    <?php echo $__env->make('components.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('components.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if(Auth::user()): ?>
                        <form class="col-12 d-flex justify-content-between  mx-0 px-0" action="<?php echo e(asset('cari')); ?>"
                            method="get">
                            <input type="text" class="form-control" name="cari"
                                placeholder="Pencarian berdasarkan nama..">
                            <div class="input-group-append ">
                                <button class="btn btn-primary d-flex font-weight-bold" type="submit" id="button">
                                    CARI</button>
                            </div>
                        </form>
                    <?php endif; ?>
                </div>

                
                <div class="table-responsive">
                    <div class="input-group mb-3">
                        <table class="table  table-hover rounded overflow-hidden mt-3">
                            <?php echo $__env->make('components.haaderTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <tbody>
                                <?php $i=1 ?>
                                <?php $__empty_1 = true; $__currentLoopData = $bukutamus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bukutamu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row" class="text-center text-muted align-middle"><?php echo e($i++); ?>

                                        </th>
                                        <?php if(auth()->user()->role_id === 3): ?>
                                            <td class="align-middle">
                                                <div class="d-flex justify-content-center">
                                                    
                                                    <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                        class="bg-info px-2 py-2 rounded text-white"><i
                                                            class="bi bi-eye-fill text-white"></i></a>
                                                    
                                                    <a href="<?php echo e(route('edit', $bukutamu->id)); ?>"
                                                        class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                                            class="bi bi-pencil-fill text-white"></i></a>

                                                    
                                                    <form action="<?php echo e(route('delete', $bukutamu->id)); ?>" method="post"
                                                        class="">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button type="submit"
                                                            class="bg-danger px-2 py-2 rounded text-white border-0"
                                                            onclick="return confirm('Yakin ?')">


                                                            <i class="bi bi-archive-fill text-white"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        <?php endif; ?>
                                        <td class="text-center">
                                            <?php if($bukutamu->takeImage): ?>
                                                <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                    class="text-decoration-none text-muted">
                                                    <img src="<?php echo e($bukutamu->takeImage ? $bukutamu->takeImage : asset('img/profile.jpg')); ?>"
                                                        class="rounded" alt="photo" width="40px">
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                        <td class="text-center align-middle"> <a
                                                href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted"><?php echo e(strlen($bukutamu->name) > 10 ? substr($bukutamu->name, 0, 20) . '...' : strtoUpper($bukutamu->name)); ?></a>
                                        </td>
                                        <td class="text-center text-muted align-middle"> <a
                                                href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted">
                                                <?php echo e($bukutamu->created_at->format('d/m/Y')); ?></a></td>
                                        <td class="text-center text-muted align-middle">
                                            <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted">
                                                <?php echo e(strlen($bukutamu->instansi) > 10 ? substr($bukutamu->instansi, 0, 10) . '...' : strtoUpper($bukutamu->instansi)); ?>

                                            </a>
                                        </td>
                                        <td class="text-center text-muted align-middle">
                                            <a href="<?php echo e(route('detailsTamu', $bukutamu->id)); ?>"
                                                class="text-decoration-none text-muted">
                                                <?php echo e(strlen($bukutamu->perihal) > 10 ? substr($bukutamu->perihal, 0, 20) . '...' : strtoupper($bukutamu->perihal)); ?>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger mt-2" role="alert">
                                        Tidak ada tamu !
                                    </div>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="mb-5"><?php echo e($bukutamus->links()); ?>

                    </div>
                </div>
            </section>
        </div>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
<?php else: ?>
    <!doctype html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="<?php echo e(asset('css/myCss.css')); ?>">
        <link rel="icon" href="<?php echo e(asset('img/book.png')); ?>">
    </head>
    <style type="text/tailwindcss">
        @layer  utilities {
            .content-auto {
                content-visibility: auto;
            }

            .shadow-me {
                margin-top: 0;
                padding: 20px;
                border-radius: 5px;
                box-shadow: rgba(243, 242, 238, 0.548) -15px 15px;
            }
        }
    </style>

    <body class="h-[100%] bg-gradient-to-r from-blue-700 to-blue-400 sm:pb-20">
        <div class="hidden lg:block mx-auto lg:block container lg:relative">
            <div class="absolute lg:top-[-250px]">
                <div
                    class="lg:w-[400px] lg:h-[400px] text-center lg:rounded-full lg:bg-blue-700 lg:relative lg:flex lg:justify-center overflow-hidden">
                    <img src="<?php echo e(asset('img/logo_kominfo1.png')); ?>" alt="diskominfo" width="340px"
                        class="lg:block lg:object-end lg:object-fill lg:rounded-full absolute bottom-[42px]">
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 justify-center  bg-transparent">
                <div class="hidden md:block grid content-center mt-40 mb-20 sm:mt-none">
                    <div>
                        <h1 class="md:text-2xl lg:text-5xl lg:font-bold text-white tracking-normal md:tracking-wide ">
                            Buku
                            tamu</h1>
                        <h5 class="md:text-xl lg:text-2xl text-white tracking-normal md:tracking-wide">Silahkan isi data
                            anda di <br>
                            buku tamu digital kami
                        </h5>
                        <img src="<?php echo e(asset('img/book.png')); ?>" class="w-[100px] sm:w-[150px] md:w-[250px]"
                            alt="book" />
                    </div>
                </div>
                <div class="bg-white md:shadow-me mt-10 lg:mt-auto">
                    <div class="text-white">
                        <div class="mx-2 py-2">
                            <div class="alert alert-warning shadow-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="stroke-current  text-white flex-shrink-0 h-6 w-6 hidden sm:block"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <span class="text-white">Warning: Mohon di isi dengan sebenar-benar nya!</span>
                                </div>
                            </div>
                            <div class="alert alert-warning shadow-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="stroke-current text-white hidden sm:block flex-shrink-0 h-6 w-6"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <span class="text-white">Warning: Sebelum mengisi kolom yang sudah disediakan wajib
                                        mengambil gambar</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mx-2 py-2">
                            <form action="<?php echo e(route('store')); ?>" method="post" enctype="multipart/form-data"
                                class="" autocomplete="off">
                                <?php echo method_field('patch'); ?>
                                <?php echo csrf_field(); ?>
                                <!-- Buka kamera -->
                                <input data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                                    class="block text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 w-full sm:w-auto bukaKamera tampilKamera cursor-pointer"
                                    value="BUKA KAMERA" onClick="buka_kamera()" data-toggle="modal"
                                    data-target="#cameraModal">
                                <input type="hidden" name="thumbnail" id="image_tag">
                                <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-2"
                                    name="name" id="name" placeholder="Nama" required
                                    value="<?php echo e(old('name')); ?>" />
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-2"
                                    name="instansi" id="instansi" required placeholder="Instansi asal"
                                    value="<?php echo e(old('instansi')); ?>" />
                                <?php $__errorArgs = ['instansi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-2"
                                    name="perihal" id="perihal" required placeholder="Perihal"
                                    value="<?php echo e(old('perihal')); ?>" />
                                <?php $__errorArgs = ['perihal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <input type="number"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-2"
                                    name="usia" id="usia" required placeholder="usia"
                                    value="<?php echo e(old('usia')); ?>" />
                                <?php $__errorArgs = ['usia'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <select
                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  my-2 text-[#78828a]"
                                    name="jenis_kelamin" id="jenis_kelamin" value="<?php echo e(old('jenis_kelamin')); ?>"
                                    required="required">
                                    <option disabled selected>Jenis Kelamin</option>
                                    <option value="laki-laki"
                                        <?php echo e(old('jenis_kelamin' == 'laki_laki' ? 'selected' : '')); ?>>
                                        Laki-Laki</option>
                                    <option value="perempuan"
                                        <?php echo e(old('jenis_kelamin' == 'perempuan' ? 'selected' : '')); ?>>
                                        Perempuan</option>
                                </select>
                                <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                                
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-2"
                                    name="pendidikan" id="pendidikan" required placeholder="Pendidikan"
                                    value="<?php echo e(old('pendidikan')); ?>" />
                                <?php $__errorArgs = ['pendidikan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  my-2"
                                    name="pekerjaan" id="pekerjaan" required placeholder="Pekerjaan"
                                    value="<?php echo e(old('pekerjaan')); ?>" />
                                <?php $__errorArgs = ['pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <select type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  my-2 text-[#78828a]"
                                    id="tujuan" name="tujuan" value="<?php echo e(old('tujuan')); ?>" required="required">
                                    <option disabled selected class="text-[#78828a]">Pilih tujuan</option>
                                    <option value="Kepala Dinas"
                                        <?php echo e(old('tujuan') == 'Kepala Dinas' ? 'selected' : ''); ?>>
                                        Kepala Dinas</option>
                                    <option value="Sekretaris" <?php echo e(old('tujuan') == 'Sekretaris' ? 'selected' : ''); ?>>
                                        Sekretaris</option>
                                    <option value="Sekretariat"
                                        <?php echo e(old('tujuan') == 'Sekretariat' ? 'selected' : ''); ?>>
                                        Sekretariat</option>
                                    <option value="Bidang Layanan E-Goverment"
                                        <?php echo e(old('tujuan') == 'Bidang Layanan E-Goverment' ? 'selected' : ''); ?>>Bidang
                                        Layanan E-Goverment</option>
                                    <option value="Bidang Statistik & PIP"
                                        <?php echo e(old('tujuan') == 'Bidang Statistik & PIP' ? 'selected' : ''); ?>>Bidang
                                        Statistik & PIP</option>
                                    <option value="Bidang TIK" <?php echo e(old('tujuan') == 'Bidang TIK' ? 'selected' : ''); ?>>
                                        Bidang TIK</option>
                                    <option value="Bidang PKP" <?php echo e(old('tujuan') == 'Bidang PKP' ? 'selected' : ''); ?>>
                                        Bidang PKP</option>
                                    <option value="Bidang Persandian"
                                        <?php echo e(old('tujuan') == 'Bidang Persandian' ? 'selected' : ''); ?>>Bidang
                                        Persandian</option>
                                </select>
                                <?php $__errorArgs = ['tujuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                                
                                <textarea type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 my-2"
                                    name="keterangan" id="keterangan" required placeholder="Keterangan / Nomor telepon"><?php echo e(old('keterangan')); ?></textarea>
                                <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-error shadow-lg">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="stroke-current flex-shrink-0 h-6 w-6" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span><?php echo e($message); ?></span>
                                        </div>
                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                
                                <div class=" py-2">
                                    <div class="flex justify-between">
                                        <div>
                                            <div class="peringatan">
                                                
                                            </div>
                                            <div class="flex flex-wrap gap-2">
                                                <div id="results">
                                                    
                                                </div>
                                                <div class="mx-2">
                                                    <button type="submit"
                                                        class="float-right text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm w-full sm:w-auto sm:px-5 py-2.5 text-center items-end mx-2"
                                                        id="btnSimpanPoto">SIMPAN</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <footer class="block sm:hidden mt-20 sm:mt-10 p-4 bg-white rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="#" class="flex items-center mb-4 sm:mb-0">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                        Diskominfo OKI</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© <a href="#"
                    class="hover:underline">E-Government ~ Diskominfo OKI™</a>. All
                Rights
                Reserved.
            </span>
        </footer>




        <!-- MODAL BUKA KAMERA -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"
            id="cameraModal">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Ambil gambar
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class=" space-y-2 mx-auto overflow-hidden sm:overflow-auto">
                        <div id="my_camera" class="mx-auto">
                            

                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <input data-modal-hide="defaultModal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 md:px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            value="Simpan" onClick="ambil_photo()">

                        <button data-modal-hide="defaultModal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-3 md:px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600 btnBatalAmbilGambarWebcam">Batal</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
    
    <script type="text/javascript" src="<?php echo e(asset('js/tailwindcss/daisyUi.js')); ?>"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

    
    <script src="<?php echo e(asset('js/webcam.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/webcam_dom_frontend.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dom.js')); ?>"></script>


    </html>
<?php endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\1. BELAJAR\buku_tamu\resources\views/bukutamu/index.blade.php ENDPATH**/ ?>