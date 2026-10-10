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
                    <h4 class="fw-bold text-dark mb-0">Edit Data Mahasiswa</h4>
                    <small class="text-muted">Perbarui data mahasiswa yang telah tersimpan</small>
                </div>
            </div>

            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-dark">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $user->nama) }}" placeholder="Contoh: Budi Santoso" required>
                    </div>
                    @error('nama')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-dark">NPM</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm', $user->nim) }}" placeholder="Contoh: 2417051001" required>
                    </div>
                    @error('npm')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-dark">Pilih Kelas</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                        <select name="kelas_id" id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror" required>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}" {{ (old('kelas_id', $user->kelas_id) == $kelasItem->id) ? 'selected' : '' }}>
                                    Kelas {{ $kelasItem->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('kelas_id')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2 pt-2">
                    <a href="{{ url('/user') }}" class="btn btn-light border w-50 py-2 font-semibold text-secondary" style="border-radius: 10px;">
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
