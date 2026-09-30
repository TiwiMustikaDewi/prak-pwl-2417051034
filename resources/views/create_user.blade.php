@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="card-title mb-0 fw-bold"><i class="bi bi-person-plus-fill me-2"></i>Buat Pengguna Baru</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold">NPM:</label>
                        <input type="text" class="form-control" id="npm" name="npm" placeholder="Masukkan NPM" required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold">Kelas:</label>
                        <select name="kelas_id" id="kelas_id" class="form-select" required>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
