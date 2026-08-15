<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataset Operator - SILDP</title>

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

        .container {
            max-width: 1100px;
            margin: 35px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,.06);
        }

        h1 {
            color: #176b87;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #176b87;
            color: white;
            text-decoration: none;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 13px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f3f6f9;
            color: #176b87;
        }

        .status {
            padding: 5px 10px;
            border-radius: 15px;
            background: #fef3c7;
            color: #92400e;
            font-size: 13px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<header>
    <h2>SILDP</h2>
    <p>Pengelolaan Dataset</p>
</header>

<div class="container">

    <h1>Dataset</h1>

    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('operator.datasets.create') }}" class="btn">
        + Tambah Dataset
    </a>

    @if ($datasets->count() > 0)

        <table>
            <thead>
                <tr>
                    <th>Nama Dataset</th>
                    <th>Deskripsi</th>
                    <th>Tahun</th>
                    <th>Perangkat Daerah</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($datasets as $dataset)
                    <tr>
                        <td>
                            <strong>{{ $dataset->name }}</strong>
                        </td>

                        <td>
                            {{ $dataset->description }}
                        </td>

                        <td>
                            {{ $dataset->year }}
                        </td>

                        <td>
                            {{ $dataset->agency }}
                        </td>

                        <td>
                            <span class="status">
                                {{ ucfirst($dataset->status) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <p>Belum ada dataset.</p>

    @endif

</div>

</body>
</html>
