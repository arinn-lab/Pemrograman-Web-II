<?php
require_once("Model.php");

if (isset($_GET['hapus'])) {
    deletePeminjaman($_GET['hapus']);
    header("Location: Peminjaman.php");
    exit();
}

$dataPeminjaman = getAllPeminjaman();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">

    <h2>Data Peminjaman</h2>

    <a href="FormPeminjaman.php" class="btn-tambah">+ Tambah Peminjaman</a>

    <table>
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>ID Member</th>
                <th>ID Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($dataPeminjaman)) {
                foreach ($dataPeminjaman as $row) {
            ?>
            <tr>
                <td><?php echo $row['id_peminjaman']; ?></td>
                <td><?php echo $row['id_member']; ?></td>
                <td><?php echo $row['id_buku']; ?></td>
                <td><?php echo $row['tgl_pinjam']; ?></td>
                <td><?php echo $row['tgl_kembali']; ?></td>
                <td style="white-space: nowrap;">
                    <a href="FormPeminjaman.php?edit=<?php echo $row['id_peminjaman']; ?>" class="btn-edit">Edit</a>
                    <a href="Peminjaman.php?hapus=<?php echo $row['id_peminjaman']; ?>" class="btn-hapus" onclick="return confirm('Yakin hapus data peminjaman ini?')">Hapus</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6' style='color: #9c8473;'>Belum ada data peminjaman.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <button onclick="window.location.href='index.php'" class="btn-back">← Kembali ke Beranda</button>

</div>
</body>
</html>