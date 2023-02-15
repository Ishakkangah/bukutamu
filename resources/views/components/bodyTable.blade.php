<tbody>
    @php $i=1 @endphp
    @forelse ($data as $d)
        <tr>
            <th scope="row" class="text-center text-muted align-middle">{{ $i++ }}</th>
            @if (auth()->user()->role_id === 3)
                <td class="align-middle">
                    {{-- delete tamu --}}
                    <div class="d-flex justify-content-center">
                        {{-- detail tamu --}}
                        <a href="{{ route('detailsTamu', $d->id) }}" class="bg-info px-2 py-2 rounded text-white "><i
                                class="bi bi-pencil-fill text-white"></i></a>
                        {{-- edit tamu --}}
                        <a href="{{ route('edit', $d->id) }}" class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                class="bi bi-pencil-fill text-white"></i></a>
                        {{-- hapus tamu --}}
                        <form action="{{ route('delete', $d->id) }}" method="post" class="">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-danger px-2 py-2 rounded text-white border-0"
                                onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                    class="bi bi-archive-fill text-white"></i></button>
                        </form>
                    </div>
                </td>
            @endif
            <td class="text-center">
                <a href="{{ route('detailsTamu', $d->id) }}" class="text-decoration-none text-muted">
                    @if ($d->takeImage)
                        <img src="{{ $d->takeImage }}" class="rounded" alt="photo" width="50px">
                    @endif
                </a>
            </td>
            <td class="text-center align-middle"><a href="{{ route('detailsTamu', $d->id) }}"
                    class="text-muted text-decoration-none ">
                    {{ strlen($d->name) > 10 ? substr($d->name, 0, 20) . '...' : strtoupper($d->name) }}
                </a>
            </td>
            <td class="text-muted text-center align-middle">
                <a href="{{ route('detailsTamu', $d->id) }}" class="text-decoration-none text-muted">
                    {{ $d->created_at->format('d/m/Y') }}</a>
            </td>
            <td class="text-muted text-center align-middle">
                <a href="{{ route('detailsTamu', $d->id) }}" class="text-decoration-none text-muted">
                    {{ strlen($d->instansi) > 10 ? substr($d->instansi, 0, 20) . '...' : strtoupper($d->instansi) }}</a>
            </td>
            <td class="text-muted text-center align-middle">
                <a href="{{ route('detailsTamu', $d->id) }}" class="text-decoration-none text-muted">
                    {{ strlen($d->perihal) > 10 ? substr($d->perihal, 0, 20) . '...' : strtoupper($d->perihal) }}
            </td>
        </tr>
    @empty
        <div class="alert alert-danger" role="alert">
            Tidak ada tamu hari ini!
        </div>
    @endforelse
</tbody>
