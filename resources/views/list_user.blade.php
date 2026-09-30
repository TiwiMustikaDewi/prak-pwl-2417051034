@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0"><i class="bi bi-people-fill text-primary me-2"></i>Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary shadow-sm fw-semibold">
        <i class="bi bi-plus-lg me-1"></i> Tambah Pengguna
    </a>
</div>

<x-user-table :users="$users" />
@endsection
