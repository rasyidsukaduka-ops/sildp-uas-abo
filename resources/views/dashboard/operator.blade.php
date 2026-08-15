<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Operator - SILDP</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
        body { background: #f3f6f9; color: #1f2937; }
        header { background: #176b87; color: white; padding: 20px 35px; display:flex; justify-content:space-between; }
        .container { max-width:1100px; margin:30px auto; padding:0 20px; }
        .box { background:white; padding:30px; border-radius:12px; margin-bottom:20px; box-shadow:0 3px 12px rgba(0,0,0,.06); }
        h1 { font-size:24px; }
        h2 { color:#176b87; margin-bottom:10px; }
        .menus { display:grid; grid-template-columns:repeat(3,1fr); gap:15px; }
        .menu { background:white; padding:25px; border-radius:10px; border:1px solid #ddd; text-decoration:none; color:inherit; display:block; }
        .menu h3 { margin-bottom:10px; color:#176b87; }
        button { background:white; border:0; padding:10px 18px; border-radius:6px; font-weight:bold; cursor:pointer; }
    </style>
</head>
<body>

<header>
    <div>
        <h1>SILDP</h1>
        <p>Sistem Informasi Layanan Data Pemerintah</p>
    </div>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Keluar</button>
    </form>
</header>

<div class="container">

    <div class="box">
        <h2>Dashboard Operator</h2>
        <p>Selamat datang, <strong>{{ $user->name }}</strong>.</p>
        <p>Anda masuk sebagai <strong>Operator</strong>.</p>
    </div>

    <div class="menus">
        <div class="menu">
            <h3>Kelola Dataset</h3>
            <p>Mengelola dan memperbarui dataset layanan data.</p>
        </div>

        <div class="menu">
            <h3>Upload Dataset</h3>
            <p>Mengunggah dataset yang telah disiapkan.</p>
        </div>

        <a href="{{ url('/operator/requests') }}" class="menu">
            <h3>Permintaan Data</h3>
            <p>Melihat permintaan data yang perlu diproses.</p>
        </a>
    </div>

</div>

</body>
</html>
