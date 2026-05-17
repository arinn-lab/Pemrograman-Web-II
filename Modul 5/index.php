<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Online</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f0;
            color: #2d3a2e;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 80px 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 50px;
        }
        .header h1 {
            font-size: 30px;
            color: #2d3a2e;
            margin-bottom: 8px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .header p {
            font-size: 15px;
            color: #6b8f6b;
        }
        .cards {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(80, 110, 80, 0.1);
            padding: 35px 30px;
            text-align: center;
            width: 220px;
            text-decoration: none;
            color: #2d3a2e;
            transition: transform 0.2s, box-shadow 0.2s;
            border-top: 4px solid #b8cfa8;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(80, 110, 80, 0.18);
            border-top-color: #6b8f6b;
        }
        .card .icon {
            font-size: 38px;
            margin-bottom: 15px;
            display: block;
        }
        .card h3 {
            font-size: 17px;
            color: #2d3a2e;
            margin-bottom: 6px;
            font-weight: 600;
        }
        .card p {
            font-size: 13px;
            color: #7a9a7a;
            line-height: 1.4;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>📚 Perpustakaan Online</h1>
    <p>Manajemen data member, buku, dan peminjaman</p>
</div>

<div class="cards">
    <a href="Member.php" class="card">
        <span class="icon">👥</span>
        <h3>Member</h3>
        <p>Kelola data anggota perpustakaan</p>
    </a>
    <a href="Buku.php" class="card">
        <span class="icon">📖</span>
        <h3>Buku</h3>
        <p>Kelola koleksi dan data buku</p>
    </a>
    <a href="Peminjaman.php" class="card">
        <span class="icon">📋</span>
        <h3>Peminjaman</h3>
        <p>Kelola transaksi peminjaman buku</p>
    </a>
</div>

</body>
</html>