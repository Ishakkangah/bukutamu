<thead class="bg-secondary  text-white">
    <tr>
        <th scope="col" class="text-center">#</th>
        <?php if(auth()->user()->role_id == 3): ?>
            <th scope="col" class="text-center">AKSI</th>
        <?php endif; ?>
        <th scope="col" class="text-center">PHOTO</th>
        <th scope="col" class="text-center">NAMA</th>
        <th scope="col" class="text-center">TANGGAL</th>
        <th scope="col" class="text-center">INSTANSI</th>
        <th scope="col" class="text-center">PERIHAL</th>
    </tr>
</thead>
<?php /**PATH E:\1. BELAJAR\buku_tamu\resources\views/components/haaderTable.blade.php ENDPATH**/ ?>