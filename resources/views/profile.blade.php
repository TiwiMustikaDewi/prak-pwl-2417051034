<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8fafc;
            padding: 20px;
        }

        .card-container {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 35px 28px;
            width: 100%;
            max-width: 360px;
            box-shadow: 0 10px 25px #0000000d;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
        }

        .avatar-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background-color: #f1f5f9;
            border: 2px solid #cbd5e1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .user-icon {
            font-size: 3.5rem;
            color: #94a3b8;
        }

        .pills-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            width: 100%;
        }

        .pill-item {
            width: 100%;
            padding: 14px 20px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
        }

        .pill-item.nama {
            background-color: #e0e7ff;
            color: #3730a3;
        }

        .pill-item.kelas {
            background-color: #f3e8ff;
            color: #6b21a8;
        }

        .pill-item.npm {
            background-color: #dcfce7;
            color: #166534;
        }
    </style>
</head>
<body>

    <div class="card-container">
    
        <div class="avatar-circle">
            <i class="fa-solid fa-user user-icon"></i>
        </div>

        <div class="pills-container">
            <div class="pill-item nama">
                {{ $nama ?: 'Nama' }}
            </div>

            <div class="pill-item kelas">
                {{ $kelas ?: 'Kelas' }}
            </div>

            <div class="pill-item npm">
                {{ $npm ?: 'NPM' }}
            </div>
        </div>

    </div>

</body>
</html>