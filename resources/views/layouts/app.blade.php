<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - Sistem Informasi Pengguna</title>

    <!-- Bootstrap 5 CSS (CDN Cloudflare for maximum reliability) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #2563eb;
            --primary-hover: #1d4ed8;
            --dark-navy: #0f172a;
            --light-bg: #f8fafc;
            --card-border: #e2e8f0;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: var(--light-bg);
            color: #334155;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar Styling */
        .navbar-custom {
            background-color: #ffffff;
            border-bottom: 1px solid var(--card-border);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            padding: 0.8rem 0;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--dark-navy) !important;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .brand-icon {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.3);
        }
        .nav-link {
            font-weight: 500;
            color: #64748b !important;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.2s ease;
        }
        .nav-link:hover {
            color: var(--primary-blue) !important;
            background-color: #eff6ff;
        }
        .nav-link.active {
            color: #ffffff !important;
            background-color: var(--primary-blue);
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.25);
        }

        /* Card Styling */
        .card-custom {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(15, 23, 42, 0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        /* Buttons */
        .btn-blue {
            background-color: var(--primary-blue);
            color: #ffffff;
            font-weight: 600;
            padding: 0.6rem 1.4rem;
            border-radius: 10px;
            border: none;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.3);
        }
        .btn-blue:hover {
            background-color: var(--primary-hover);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }

        /* Form Inputs */
        .form-control, .form-select {
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            padding: 0.65rem 1rem;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
        }
        .input-group-text {
            background-color: #f1f5f9;
            border: 1px solid #cbd5e1;
            border-radius: 10px 0 0 10px;
            color: #64748b;
        }

        /* Table Styling */
        .table-custom {
            margin-bottom: 0;
        }
        .table-custom thead {
            background-color: #f8fafc;
            border-bottom: 2px solid var(--card-border);
        }
        .table-custom th {
            font-size: 0.825rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
            font-weight: 700;
            padding: 1rem 1.25rem;
        }
        .table-custom td {
            padding: 1.1rem 1.25rem;
            vertical-align: middle;
            color: #1e293b;
            font-size: 0.95rem;
        }
        .table-custom tbody tr {
            border-bottom: 1px solid #f1f5f9;
            transition: background-color 0.15s ease;
        }
        .table-custom tbody tr:hover {
            background-color: #f8fafc;
        }

        /* Badges */
        .badge-blue {
            background-color: #eff6ff;
            color: #1d4ed8;
            border: 1px solid #bfdbfe;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background-color: #ffffff;
            border-top: 1px solid var(--card-border);
            padding: 1.5rem 0;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <!-- Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Container -->
    <main class="container py-4 flex-grow-1">
        {{-- Flash Messages / Alert Notifikasi --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 d-flex align-items-center gap-2 mb-4" role="alert" style="background-color: #dcfce7; color: #15803d; border-left: 4px solid #16a34a !important;">
                <i class="bi bi-check-circle-fill fs-5"></i>
                <div class="fw-medium">{{ session('success') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 d-flex align-items-center gap-2 mb-4" role="alert" style="background-color: #fee2e2; color: #b91c1c; border-left: 4px solid #dc2626 !important;">
                <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                <div class="fw-medium">{{ session('error') }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert" style="background-color: #fef3c7; color: #92400e; border-left: 4px solid #d97706 !important;">
                <div class="d-flex align-items-center gap-2 mb-1 fw-bold">
                    <i class="bi bi-exclamation-octagon-fill fs-5"></i>
                    <span>Terdapat Kesalahan Input:</span>
                </div>
                <ul class="mb-0 ps-4 small">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Event delegation untuk tombol hapus dengan class .btn-delete
            document.addEventListener('click', function(e) {
                const deleteBtn = e.target.closest('.btn-delete');
                if (deleteBtn) {
                    e.preventDefault();
                    const form = deleteBtn.closest('form');
                    const itemName = deleteBtn.getAttribute('data-name') || 'data ini';

                    Swal.fire({
                        title: 'Konfirmasi Hapus',
                        html: `Apakah Anda yakin ingin menghapus <strong>${itemName}</strong>?<br><small class="text-muted">Tindakan ini tidak dapat dibatalkan!</small>`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: '<i class="bi bi-trash3-fill me-1"></i> Ya, Hapus Data',
                        cancelButtonText: 'Batal',
                        reverseButtons: true,
                        customClass: {
                            popup: 'rounded-4 shadow-lg border-0 p-4',
                            title: 'fw-bold text-dark fs-4 mb-2',
                            htmlContainer: 'text-secondary fs-6 mb-3',
                            confirmButton: 'btn btn-danger px-4 py-2 fw-semibold rounded-3 ms-2',
                            cancelButton: 'btn btn-light border px-4 py-2 fw-semibold rounded-3 text-secondary'
                        },
                        buttonsStyling: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
