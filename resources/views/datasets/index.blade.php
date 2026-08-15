<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dataset Publik - SILDP</title>

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

        .dataset {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .dataset h2 {
            margin-top: 0;
            color: #176b87;
        }

        .meta {
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 10px;
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
    <p>Dataset Publik</p>
</header>

<div class="container">

    <h1>Dataset Tersedia</h1>

    @if ($datasets->count() > 0)

        @foreach ($datasets as $dataset)

            <div class="dataset">

                <h2>
                    {{ $dataset->name }}
                </h2>

                <div class="meta">
                    Tahun: {{ $dataset->year }}
                    |
                    Perangkat Daerah: {{ $dataset->agency }}
                </div>

                <p>
                    {{ $dataset->description }}
                </p>

            </div>

        @endforeach

    @else

        <div class="empty">
            Belum ada dataset yang dipublikasikan.
        </div>

    @endif

</div>

</body>
</html>
