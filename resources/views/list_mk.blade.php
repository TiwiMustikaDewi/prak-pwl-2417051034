@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="row align-items-center mb-4">
    <div class="col-md-7">
        <h2 class="fw-bold text-dark mb-1">Daftar Mata Kuliah</h2>
        <p class="text-muted mb-0">Manajemen data mata kuliah pada kurikulum ilmu komputer.</p>
    </div>
    <div class="col-md-5 text-md-end mt-3 mt-md-0">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-blue">
            <i class="bi bi-plus-circle-fill"></i> Tambah Mata Kuliah Baru
        </a>
    </div>
</div>

<!-- Stat Counter Card -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card card-custom p-3 border-0 shadow-sm">
            <div class="d-flex align-items-center">
                <div class="rounded-3 p-3 me-3 text-white" style="background: linear-gradient(135deg, #0284c7, #0369a1);">
                    <i class="bi bi-journal-check fs-4"></i>
                </div>
                <div>
                    <span class="text-muted small fw-medium">Total Mata Kuliah</span>
                    <h3 class="mb-0 fw-bold text-dark">{{ count($mks) }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Table Card -->
<div class="card card-custom overflow-hidden">
    <div class="table-responsive">
        <table class="table table-custom mb-0">
            <thead>
                <tr>
                    <th scope="col">ID (UUID)</th>
                    <th scope="col">Nama Mata Kuliah</th>
                    <th scope="col" class="text-center">SKS</th>
                    <th scope="col" class="text-center" style="width: 160px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr>
                        <td>
                            <span class="badge bg-light text-secondary border font-monospace px-2 py-1" style="font-size: 0.8rem;" title="{{ $mk->id }}">
                                <i class="bi bi-key me-1 text-primary"></i>{{ Str::limit($mk->id, 18, '...') }}
                            </span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center text-info fw-bold" style="width: 40px; height: 40px; background-color: #e0f2fe; border: 1px solid #bae6fd;">
                                    <i class="bi bi-book-half fs-5"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-semibold text-dark">{{ $mk->nama_mk }}</h6>
                                    <small class="text-muted">Mata Kuliah Ilmu Komputer</small>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge rounded-pill bg-primary text-white px-3 py-2 fw-bold" style="background: linear-gradient(135deg, #2563eb, #1d4ed8) !important;">
                                {{ $mk->sks }} SKS
                            </span>
                        </td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-sm btn-outline-warning rounded-2 d-inline-flex align-items-center gap-1 fw-semibold" title="Edit Data">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-sm btn-outline-danger rounded-2 d-inline-flex align-items-center gap-1 fw-semibold btn-delete" data-name="mata kuliah {{ $mk->nama_mk }}" title="Hapus Data">
                                        <i class="bi bi-trash3-fill"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-5">
                            <div class="py-4">
                                <i class="bi bi-journal-x fs-1 text-muted d-block mb-3"></i>
                                <h6 class="fw-semibold text-dark mb-1">Belum Ada Data Mata Kuliah</h6>
                                <p class="text-muted small mb-3">Silakan tambahkan data mata kuliah baru melalui tombol di atas.</p>
                                <a href="{{ route('matakuliah.create') }}" class="btn btn-blue btn-sm">
                                    <i class="bi bi-plus-lg"></i> Tambah Mata Kuliah Baru
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection