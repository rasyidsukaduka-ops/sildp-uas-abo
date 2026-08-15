<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Dataset - SILDP</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6f9;
        }

        header {
            background: #176b87;
            color: white;
            padding: 20px 35px;
        }

        .container {
            max-width: 800px;
            margin: 35px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0,0,0,.06);
        }

        h1 {
            color: #176b87;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 7px;
            box-sizing: border-box;
        }

        textarea {
            min-height: 120px;
        }

        button {
            margin-top: 20px;
            padding: 12px 20px;
            background: #176b87;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 7px;
        }
    </style>
</head>

<body>

<header>
    <h2>SILDP</h2>
    <p>Tambah Dataset</p>
</header>

<div class="container">

    <h1>Tambah Dataset</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('operator.datasets.store') }}">

        @csrf

        <label>Nama Dataset</label>

        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
            placeholder="Contoh: Data Kemiskinan Kabupaten Subang"
            required
        >

        <label>Deskripsi</label>

        <textarea
            name="description"
            placeholder="Deskripsi dataset..."
            required
        >{{ old('description') }}</textarea>

        <label>Tahun</label>

        <input
            type="text"
            name="year"
            value="{{ old('year') }}"
            placeholder="2026"
            maxlength="4"
            required
        >

        <label>Perangkat Daerah</label>

        <input
            type="text"
            name="agency"
            value="{{ old('agency') }}"
            placeholder="Contoh: Dinas Komunikasi dan Informatika"
            required
        >

        <button type="submit">
            Simpan Dataset
        </button>

    </form>

</div>

</body>
</html>
