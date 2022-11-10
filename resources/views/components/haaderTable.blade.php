<thead class="bg-secondary  text-white">
    <tr>
        <th scope="col" class="text-center">#</th>
        @if (auth()->user()->role_id == 3)
            <th scope="col" class="text-center">AKSI</th>
        @endif
        <th scope="col" class="text-center">PHOTO</th>
        <th scope="col" class="text-center">NAMA</th>
        <th scope="col" class="text-center">TANGGAL</th>
        <th scope="col" class="text-center">INSTANSI</th>
        <th scope="col" class="text-center">PERIHAL</th>
    </tr>
</thead>
