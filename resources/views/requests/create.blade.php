<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ajukan Permintaan Data - SILDP</title>

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
            max-width: 800px;
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
            font-size: 15px;
        }

        textarea {
            min-height: 120px;
            resize: vertical;
        }

        button {
            margin-top: 20px;
            padding: 12px 20px;
            background: #176b87;
            color: white;
            border: none;
            border-radius: 7px;
            cursor: pointer;
            font-size: 15px;
        }

        button:hover {
            background: #12566d;
        }

        .error {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<header>
    <h2>SILDP</h2>
    <p>Sistem Informasi Layanan Data Pemerintah</p>
</header>

<div class="container">

    <h1>Ajukan Permintaan Data</h1>

    <p>
        Silakan isi formulir berikut untuk mengajukan permintaan data.
    </p>

    @if ($errors->any())
        <div class="error">
            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('requests.store') }}">

        @csrf

        <label for="data_name">
            Nama Data
        </label>

        <input
            type="text"
            id="data_name"
            name="data_name"
            value="{{ old('data_name') }}"
            placeholder="Contoh: Data Jumlah Penduduk Kabupaten Subang"
            required
        >

        <label for="description">
            Deskripsi Data
        </label>

        <textarea
            id="description"
            name="description"
            placeholder="Jelaskan data yang dibutuhkan..."
            required
        >{{ old('description') }}</textarea>

        <label for="purpose">
            Tujuan Penggunaan
        </label>

        <textarea
            id="purpose"
            name="purpose"
            placeholder="Jelaskan tujuan penggunaan data..."
        >{{ old('purpose') }}</textarea>

        <button type="submit">
            Ajukan Permintaan
        </button>

    </form>

</div>

</body>
</html>
