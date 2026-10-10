@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card card-custom p-4">
            <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                <div class="rounded-3 p-3 text-white" style="background: linear-gradient(135deg, #f59e0b, #d97706); box-shadow: 0 4px 10px rgba(245, 158, 11, 0.3);">
                    <i class="bi bi-pencil-square fs-4"></i>
                </div>
                <div>
                    <h4 class="fw-bold text-dark mb-0">Edit Mata Kuliah</h4>
                    <small class="text-muted">Perbarui data mata kuliah yang telah tersimpan</small>
                </div>
            </div>

            <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-semibold text-dark">Nama Mata Kuliah</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                        <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama_mk" name="nama_mk" value="{{ old('nama_mk', $mk->nama_mk) }}" placeholder="Contoh: Pemrograman Web Lanjut" required>
                    </div>
                    @error('nama_mk')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="sks" class="form-label fw-semibold text-dark">Jumlah SKS</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-hash"></i></span>
                        <input type="number" class="form-control @error('sks') is-invalid @enderror" id="sks" name="sks" value="{{ old('sks', $mk->sks) }}" min="1" max="6" placeholder="Contoh: 3" required>
                    </div>
                    @error('sks')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2 pt-2">
                    <a href="{{ route('matakuliah.index') }}" class="btn btn-light border w-50 py-2 font-semibold text-secondary" style="border-radius: 10px;">
                        <i class="bi bi-arrow-left me-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-warning text-white fw-semibold w-50 py-2" style="border-radius: 10px; background: linear-gradient(135deg, #f59e0b, #d97706); border: none; box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);">
                        <i class="bi bi-check-circle me-1"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection