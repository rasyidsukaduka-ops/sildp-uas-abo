<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - SILDP</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f3f6f9;
            color: #1f2937;
        }

        .header {
            background: #176b87;
            color: white;
            padding: 18px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 22px;
        }

        .header p {
            font-size: 13px;
            margin-top: 5px;
            opacity: 0.9;
        }

        .logout button {
            background: white;
            color: #176b87;
            border: none;
            padding: 9px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 25px;
        }

        .welcome {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .welcome h2 {
            color: #176b87;
            margin-bottom: 8px;
        }

        .welcome p {
            color: #6b7280;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .card h3 {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 12px;
        }

        .card .number {
            font-size: 28px;
            font-weight: bold;
            color: #176b87;
        }

        .section {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
        }

        .section h2 {
            color: #176b87;
            margin-bottom: 20px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }

        .menu-item {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            text-decoration: none;
    	    color: inherit;
   	    display: block;
        }

        .menu-item h3 {
            margin-bottom: 8px;
            color: #374151;
        }

        .menu-item p {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.5;
        }

        @media (max-width: 800px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .menu {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {
            .cards {
                grid-template-columns: 1fr;
            }

            .header {
                padding: 15px;
            }

            .container {
                padding: 0 15px;
            }
        }
    </style>
</head>

<body>

<header class="header">

    <div>
        <h1>SILDP</h1>
        <p>Sistem Informasi Layanan Data Pemerintah</p>
    </div>

    <form method="POST" action="/logout">
        @csrf
        <div class="logout">
            <button type="submit">Keluar</button>
        </div>
    </form>

</header>

<main class="container">

    <div class="welcome">
        <h2>Dashboard Admin</h2>
        <p>
            Selamat datang, <strong>{{ $user->name }}</strong>.
            Anda masuk sebagai <strong>Administrator</strong>.
        </p>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Permintaan Data</h3>
            <div class="number">0</div>
        </div>

        <div class="card">
            <h3>Menunggu Verifikasi</h3>
            <div class="number">0</div>
        </div>

        <div class="card">
            <h3>Dataset</h3>
            <div class="number">0</div>
        </div>

        <div class="card">
            <h3>Pengguna</h3>
            <div class="number">1</div>
        </div>

    </div>

    <div class="section">

        <h2>Menu Administrasi</h2>

        <div class="menu">

            <div class="menu-item">
                <h3>Kelola Pengguna</h3>
                <p>
                    Mengelola akun pengguna, operator, dan administrator
                    dalam sistem SILDP.
                </p>
            </div>

            <a href="{{ url('/admin/requests') }}" class="menu-item">
                <h3>Verifikasi Permintaan</h3>
                <p>
                    Memeriksa dan memverifikasi permintaan data
                    yang diajukan oleh pengguna.
                </p>
            </a>

            <div class="menu-item">
                <h3>Kelola Dataset</h3>
                <p>
                    Mengelola dataset yang tersedia dan memastikan
                    data siap dipublikasikan.
                </p>
            </div>

            <div class="menu-item">
                <h3>Publikasi Data</h3>
                <p>
                    Mengatur dataset yang telah diverifikasi agar
                    dapat diakses oleh pengguna.
                </p>
            </div>

            <div class="menu-item">
                <h3>Monitoring Layanan</h3>
                <p>
                    Memantau status permintaan data dan aktivitas
                    layanan SILDP.
                </p>
            </div>

            <div class="menu-item">
                <h3>Laporan</h3>
                <p>
                    Melihat ringkasan aktivitas dan laporan
                    layanan data pemerintah.
                </p>
            </div>

        </div>

    </div>

</main>

</body>
</html>
