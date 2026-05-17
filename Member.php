<?php
require_once("Model.php");

if (isset($_GET['hapus'])) {
    deleteMember($_GET['hapus']);
    header("Location: Member.php");
    exit();
}

$dataMember = getAllMember();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="container">

    <h2>Data Member</h2>

    <a href="FormMember.php" class="btn-tambah">+ Tambah Member</a>

    <table>
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($dataMember)) {
                foreach ($dataMember as $row) {
            ?>
            <tr>
                <td><?php echo $row['id_member']; ?></td>
                <td><?php echo htmlspecialchars($row['nama_member']); ?></td>
                <td><?php echo htmlspecialchars($row['nomor_member']); ?></td>
                <td><?php echo htmlspecialchars($row['alamat']); ?></td>
                <td><?php echo $row['tgl_mendaftar']; ?></td>
                <td><?php echo $row['tgl_terkahir_bayar']; ?></td>
                <td style="white-space: nowrap;">
                    <a href="FormMember.php?edit=<?php echo $row['id_member']; ?>" class="btn-edit">Edit</a>
                    <a href="Member.php?hapus=<?php echo $row['id_member']; ?>" class="btn-hapus" onclick="return confirm('Hapus data member ini?')">Hapus</a>
                </td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='7' style='color: #9c8473;'>Belum ada data member.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <button onclick="window.location.href='index.php'" class="btn-back">← Kembali ke Beranda</button>

</div>
</body>
</html>