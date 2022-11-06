<tbody>
    @php $i=1 @endphp
    @forelse ($data as $d)
        <tr>
            <th scope="row" class="text-center text-muted align-middle">{{ $i++ }}</th>
            <td class="align-middle">
                {{-- delete tamu --}}
                <div class="d-flex justify-content-center">
                    @if (auth()->user()->role_id === 3)
                        <form action="{{ route('delete', $d->id) }}" method="post" class="">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-danger px-2 py-2 rounded text-white border-0"
                                onclick="alert(`yakin anda ingin menghapus data ini ? `)"><i
                                    class="bi bi-archive-fill"></i></button>
                        </form>
                        {{-- edit tamu --}}
                        <a href="{{ route('edit', $d->id) }}" class="bg-primary px-2 py-2 rounded text-white mx-2"><i
                                class="bi bi-pencil-fill"></i></a>
                    @endif
                    {{-- lihat detail tentang tamu --}}
                    <a href="{{ route('detailsTamu', $d->id) }}" class="bg-success px-2 py-2 rounded text-white"><i
                            class="bi bi-eye"></i></a>
                </div>
            </td>
            <td class="text-center">
                @if ($d->takeImage)
                    <img src="{{ $d->takeImage }}" class="rounded" alt="photo" width="50px">
                @endif
            </td>
            <td class="text-center align-middle"><a href="{{ route('detailsTamu', $d->id) }}"
                    class="text-muted text-decoration-none ">{{ strtoupper($d->name) }}</a>
            </td>
            <td class="text-muted text-center align-middle">{{ $d->created_at->format('d/m/Y') }}</td>
            <td class="text-muted text-center align-middle">{{ strtoupper($d->instansi) }}</td>
            <td class="text-muted text-center align-middle">{{ strtoupper($d->perihal) }}</td>
        </tr>
    @empty
        <div class="alert alert-danger" role="alert">
            Tidak ada tamu hari ini!
        </div>
    @endforelse
</tbody>
