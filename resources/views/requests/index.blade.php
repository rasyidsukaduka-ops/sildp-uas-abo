<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Permintaan Data - SILDP</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6f9;
            color: #1f2937;
        }

        header {
            background: #176b87;
            color: white;
            padding: 20px 35px;
        }

        header h2 {
            margin: 0 0 5px;
        }

        header p {
            margin: 0;
        }

        .container {
            max-width: 1100px;
            margin: 35px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .06);
        }

        h1 {
            color: #176b87;
            margin-top: 0;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 14px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 11px 18px;
            background: #176b87;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            margin-bottom: 25px;
        }

        .btn:hover {
            background: #12566d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f3f6f9;
            color: #176b87;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            background: #fef3c7;
            color: #92400e;
            font-size: 13px;
            font-weight: bold;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #6b7280;
        }
    </style>
</head>

<body>

<header>
    <h2>SILDP</h2>
    <p>Sistem Informasi Layanan Data Pemerintah</p>
</header>

<div class="container">

    <h1>Permintaan Data Saya</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('requests.create') }}" class="btn">
        + Ajukan Permintaan Data
    </a>

    @if ($requests->count() > 0)

        <table>
            <thead>
                <tr>
                    <th>Nama Data</th>
                    <th>Deskripsi</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($requests as $request)
                    <tr>
                        <td>
                            <strong>{{ $request->data_name }}</strong>
                        </td>

                        <td>
                            {{ $request->description }}
                        </td>

                        <td>
                            {{ $request->purpose ?? '-' }}
                        </td>

                        <td>
                            <span class="status">
                                {{ ucfirst($request->status) }}
                            </span>
                        </td>

                        <td>
                            {{ $request->created_at->format('d-m-Y H:i') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <div class="empty">
            Belum ada permintaan data.
        </div>

    @endif

</div>

</body>
</html>
