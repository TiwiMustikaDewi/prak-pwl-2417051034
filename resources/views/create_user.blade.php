@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card card-custom p-4">
            <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                <div class="rounded-3 p-3 text-white" style="background: linear-gradient(135deg, #2563eb, #1d4ed8);">
                    <i class="bi bi-person-plus-fill fs-4"></i>
                </div>
                <div>
                    <h4 class="fw-bold text-dark mb-0">Tambah Pengguna</h4>
                    <small class="text-muted">Masukkan data mahasiswa ke dalam sistem</small>
                </div>
            </div>

            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="nama" class="form-label fw-semibold text-dark">Nama Lengkap</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Budi Santoso" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="npm" class="form-label fw-semibold text-dark">NPM</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-card-text"></i></span>
                        <input type="text" class="form-control" id="npm" name="npm" placeholder="Contoh: 2417051001" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold text-dark">Pilih Kelas</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                        <select name="kelas_id" id="kelas_id" class="form-select" required>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">Kelas {{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-flex gap-2 pt-2">
                    <a href="{{ url('/user') }}" class="btn btn-light border w-50 py-2 font-semibold text-secondary" style="border-radius: 10px;">
                        <i class="bi bi-arrow-left me-1"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-blue w-50 py-2">
                        <i class="bi bi-check-lg"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
