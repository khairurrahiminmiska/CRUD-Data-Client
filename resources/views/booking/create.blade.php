<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Booking</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #eef2ff, #f8fbff);
            min-height: 100vh;
        }

        .main-card {
            max-width: 800px;
            margin: 50px auto;
            border: none;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0,0,0,0.08);
            background: #ffffff;
        }

        .header-box {
            background: linear-gradient(to right, #4f46e5, #06b6d4);
            padding: 30px;
            color: white;
        }

        .header-box h1 {
            margin: 0;
            font-weight: 700;
            font-size: 28px;
        }

        .header-box p {
            margin-top: 8px;
            opacity: 0.9;
        }

        .form-section {
            padding: 35px;
        }

        .form-label {
            font-weight: 600;
            color: #334155;
        }

        .form-control {
            border-radius: 12px;
            padding: 12px;
            border: 1px solid #dbeafe;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #3b82f6;
        }

        .btn-save {
            background: linear-gradient(to right, #2563eb, #06b6d4);
            border: none;
            padding: 12px 30px;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-save:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37,99,235,0.25);
        }

        .btn-back {
            background: #e2e8f0;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            color: #334155;
            font-weight: 600;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #cbd5e1;
            color: #111827;
        }
    </style>
</head>
<body>

<div class="main-card">

    <div class="header-box">
        <h1>Tambah Booking Fotografer</h1>
        <p>Silakan isi data client booking dengan lengkap</p>
    </div>

    <div class="form-section">

        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama Client</label>
                <input type="text" name="nama_client" class="form-control" placeholder="Masukkan nama client">
            </div>

            <div class="mb-3">
                <label class="form-label">Kampus</label>
                <input type="text" name="kampus" class="form-control" placeholder="Masukkan nama kampus">
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Booking</label>
                <input type="date" name="tanggal" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Paket Foto</label>
                <input type="text" name="paket" class="form-control" placeholder="Contoh: Wisuda Premium">
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan nomor HP">
            </div>

            <div class="mb-4">
                <label class="form-label">Lokasi Foto</label>
                <input type="text" name="lokasi_foto" class="form-control" placeholder="Masukkan lokasi foto">
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('booking.index') }}" class="btn-back">
                    ← Kembali
                </a>

                <button type="submit" class="btn-save">
                    Simpan Booking
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>