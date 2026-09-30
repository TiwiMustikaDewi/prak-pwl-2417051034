@props(['users'])

<div class="table-responsive shadow-sm rounded border">
    <table class="table table-hover align-middle mb-0 bg-white">
        <thead class="table-primary text-dark">
            <tr>
                <th scope="col" class="py-3 px-4">ID</th>
                <th scope="col" class="py-3 px-4">Nama</th>
                <th scope="col" class="py-3 px-4">NPM</th>
                <th scope="col" class="py-3 px-4">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="py-3 px-4 text-secondary">{{ $user->id }}</td>
                    <td class="py-3 px-4 text-dark fw-medium">{{ $user->nama }}</td>
                    <td class="py-3 px-4"><span class="badge bg-secondary px-3 py-2 fs-6">{{ $user->nim }}</span></td>
                    <td class="py-3 px-4"><span class="badge bg-info text-dark px-3 py-2 fs-6">{{ $user->nama_kelas }}</span></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-muted">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
