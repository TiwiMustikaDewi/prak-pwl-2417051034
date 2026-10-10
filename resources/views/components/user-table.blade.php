@props(['users'])

<div class="card card-custom overflow-hidden">
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th scope="col" class="text-center" style="width: 70px;">ID</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Kelas</th>
                    <th scope="col" class="text-center" style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td class="text-center fw-semibold text-secondary">
                            #{{ $user->id }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center text-primary fw-bold" style="width: 40px; height: 40px; background-color: #eff6ff; border: 1px solid #dbeafe;">
                                    <i class="bi bi-person-fill fs-5"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-semibold text-dark">{{ $user->nama }}</h6>
                                    <small class="text-muted">Mahasiswa S1 Ilmu Komputer</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge-blue font-monospace">
                                <i class="bi bi-card-heading me-1"></i>{{ $user->nim }}
                            </span>
                        </td>
                        <td>
                            <span class="badge rounded-pill bg-light text-dark border px-3 py-2 fw-semibold">
                                <i class="bi bi-book me-1 text-primary"></i>Kelas {{ $user->nama_kelas }}
                            </span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-warning rounded-2 d-inline-flex align-items-center gap-1 fw-semibold" title="Edit Data">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-outline-danger rounded-2 d-inline-flex align-items-center gap-1 fw-semibold btn-delete" data-name="mahasiswa {{ $user->nama }}" title="Hapus Data">
                                        <i class="bi bi-trash3-fill"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center py-5">
                            <div class="py-4">
                                <i class="bi bi-folder-x fs-1 text-muted d-block mb-3"></i>
                                <h6 class="fw-semibold text-dark mb-1">Belum Ada Data Pengguna</h6>
                                <p class="text-muted small mb-3">Silakan tambahkan data pengguna baru melalui tombol di atas.</p>
                                <a href="{{ route('user.create') }}" class="btn btn-blue btn-sm">
                                    <i class="bi bi-plus-lg"></i> Tambah Pengguna Baru
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
