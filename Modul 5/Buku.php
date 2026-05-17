<?php
require_once("Model.php");

if (isset($_GET['hapus'])) {
    deleteBuku($_GET['hapus']);
    header("Location: Buku.php");
    exit();
}

$dataBuku = getAllBuku();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">

    <h2>Data Buku</h2>

    <a href="FormBuku.php" class="btn-tambah">+ Tambah Buku</a>

    <table>
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($dataBuku)) {
                foreach ($dataBuku as $row) {
            ?>
            <tr>
                <td><?php echo htmlspecialchars($row['id_buku']); ?></td>
                <td><?php echo htmlspecialchars($row['judul_buku']); ?></td>
                <td><?php echo htmlspecialchars($row['penulis']); ?></td>
                <td><?php echo htmlspecialchars($row['penerbit']); ?></td>
                <td><?php echo htmlspecialchars($row['tahun_terbit']); ?></td>
                <td style="white-space: nowrap;">
                    <a href="FormBuku.php?edit=<?php echo $row['id_buku']; ?>" class="btn-edit">Edit</a>
                    <a href="Buku.php?hapus=<?php echo $row['id_buku']; ?>" class="btn-hapus" onclick="return confirm('Yakin hapus buku ini?')">Hapus</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6' style='color: #9c8473;'>Belum ada data buku.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <button onclick="window.location.href='index.php'" class="btn-back">← Kembali ke Beranda</button>

</div>
</body>
</html>