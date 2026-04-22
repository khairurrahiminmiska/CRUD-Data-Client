<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Fotografer</title>

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
            font-weight: 700;
            margin: 0;
            font-size: 30px;
        }

        .header-box p {
            margin: 8px 0 0;
            opacity: 0.9;
        }

        .btn-add {
            background: linear-gradient(to right, #2563eb, #06b6d4);
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-add:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 10px 20px rgba(37,99,235,0.25);
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 12px;
        }

        .table thead th {
            border: none;
            background: #f1f5f9;
            color: #334155;
            font-weight: 600;
            padding: 16px;
            text-align: center;
        }

        .table tbody tr {
            background: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.03);
            border-radius: 14px;
        }

        .table tbody td {
            padding: 18px 14px;
            vertical-align: middle;
            border-top: none;
            text-align: center;
        }

        .btn-edit {
            background: #facc15;
            border: none;
            color: #111827;
            padding: 8px 16px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn-edit:hover {
            background: #eab308;
            color: #111827;
        }

        .btn-delete {
            background: #ef4444;
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 10px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-delete:hover {
            background: #dc2626;
        }

        .empty-box {
            padding: 30px;
            font-weight: 500;
            color: #64748b;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <div class="main-card">

        <div class="header-box">
            <h1>Booking Fotografer by Memorylens._</h1>
            <p>Mengelola Data Booking Klien</p>
        </div>

        <div class="p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold mb-0">Data Booking Client</h4>

                <a href="{{ route('booking.create') }}" class="btn-add">
                    + Tambah Booking
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success rounded-4 border-0 shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Client</th>
                            <th>Kampus</th>
                            <th>Tanggal</th>
                            <th>Paket</th>
                            <th>No HP</th>
                            <th>Lokasi Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($bookings as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama_client }}</td>
                            <td>{{ $item->kampus }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->paket }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->lokasi_foto }}</td>

                            <td>
                                <a href="{{ route('booking.edit', $item->id) }}"
                                   class="btn-edit">
                                    Edit
                                </a>

                                <form action="{{ route('booking.destroy', $item->id) }}"
                                      method="POST"
                                      style="display:inline;">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn-delete"
                                            onclick="return confirm('Yakin ingin hapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                        @empty
                        <tr>
                            <td colspan="8" class="empty-box">
                                Belum ada data booking
                            </td>
                        </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

</body>
</html>