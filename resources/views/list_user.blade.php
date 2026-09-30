@extends('layouts.app')

@section('content')
<!-- Page Header -->
<div class="row align-items-center mb-4">
    <div class="col-md-7">
        <h2 class="fw-bold text-dark mb-1">Daftar Pengguna</h2>
        <p class="text-muted mb-0">Manajemen data mahasiswa terdaftar pada mata kuliah Pemrograman Web Lanjut.</p>
    </div>
    <div class="col-md-5 text-md-end mt-3 mt-md-0">
        <a href="{{ route('user.create') }}" class="btn btn-blue">
            <i class="bi bi-person-plus-fill"></i> Tambah Pengguna Baru
        </a>
    </div>
</div>

<!-- Stat Counter Card -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card card-custom p-3 border-0 shadow-sm">
            <div class="d-flex align-items-center">
                <div class="rounded-3 p-3 me-3 text-white" style="background: linear-gradient(135deg, #2563eb, #1d4ed8);">
                    <i class="bi bi-people-fill fs-4"></i>
                </div>
                <div>
                    <span class="text-muted small fw-medium">Total Mahasiswa Terdaftar</span>
                    <h3 class="mb-0 fw-bold text-dark">{{ count($users) }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dynamic Component User Table -->
<x-user-table :users="$users" />
@endsection
