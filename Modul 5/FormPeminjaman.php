<?php
date_default_timezone_set('Asia/Makassar');
require_once("Model.php");

$editMode = false;
$data = [];
$tanggal_sekarang = date('Y-m-d');

if (isset($_GET['edit'])) {
    $editMode = true;
    $data = getPeminjamanById($_GET['edit']);
}

if (isset($_POST['submit'])) {
    if ($editMode) {
        updatePeminjaman(
            $_POST['id_peminjaman'],
            $_POST['id_member'],
            $_POST['id_buku'],
            $_POST['tgl_pinjam'],
            $_POST['tgl_kembali']
        );
    } else {
        insertPeminjaman(
            $_POST['id_member'],
            $_POST['id_buku'],
            $_POST['tgl_pinjam'],
            $_POST['tgl_kembali']
        );
    }
    header("Location: Peminjaman.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $editMode ? "Edit Peminjaman" : "Tambah Peminjaman"; ?></title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="form-container">

    <h1><?php echo $editMode ? "Edit Peminjaman" : "Tambah Peminjaman"; ?></h1>

    <div class="form-box">
        <form method="POST" action="">
            <?php if ($editMode): ?>
                <input type="hidden" name="id_peminjaman" value="<?php echo $data['id_peminjaman']; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label>ID Member</label>
                <input type="text" name="id_member" required value="<?php echo $editMode ? $data['id_member'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>ID Buku</label>
                <input type="text" name="id_buku" required value="<?php echo $editMode ? $data['id_buku'] : ''; ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" required
                    value="<?php echo $editMode ? $data['tgl_pinjam'] : $tanggal_sekarang; ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" required
                     value="<?php echo $editMode ? $data['tgl_kembali'] : ''; ?>">
            </div>

            <div class="form-buttons">
                <button type="submit" name="submit" class="btn-submit">Submit</button>
                <a href="Peminjaman.php" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>