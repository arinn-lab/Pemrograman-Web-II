<?php
date_default_timezone_set('Asia/Makassar');
require_once("Model.php");

$editMode = false;
$data = [];

if (isset($_GET['edit'])) {
    $editMode = true;
    $data = getMemberById($_GET['edit']);
}

$waktu_sekarang = date('Y-m-d\TH:i');

if (isset($_POST['submit'])) {
    if ($editMode) {
        updateMember(
            $_POST['id_member'],
            $_POST['nama_member'],
            $_POST['nomor_member'],
            $_POST['alamat'],
            $_POST['tgl_mendaftar'],
            $_POST['tgl_bayar']
        );
    } else {
        insertMember(
            $_POST['nama_member'],
            $_POST['nomor_member'],
            $_POST['alamat'],
            $_POST['tgl_mendaftar'],
            $_POST['tgl_bayar']
        );
    }
    header("Location: Member.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $editMode ? "Edit Member" : "Tambah Member"; ?></title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="form-container">

    <h1><?php echo $editMode ? "Edit Member" : "Tambah Member"; ?></h1>

    <div class="form-box">
        <form method="POST" action="">
            <?php if ($editMode): ?>
                <input type="hidden" name="id_member" value="<?php echo $data['id_member']; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama_member" required value="<?php echo $editMode ? htmlspecialchars($data['nama_member']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Nomor</label>
                <input type="text" name="nomor_member" required value="<?php echo $editMode ? htmlspecialchars($data['nomor_member']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" rows="3" required><?php echo $editMode ? htmlspecialchars($data['alamat']) : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label>Tanggal Mendaftar</label>
                <input type="datetime-local" name="tgl_mendaftar" required
    value="<?php echo $editMode && !empty($data['tgl_mendaftar']) ? date('Y-m-d\TH:i', strtotime($data['tgl_mendaftar'])) : $waktu_sekarang; ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Terakhir Bayar</label>
                <input type="date" name="tgl_bayar" required value="<?php echo $editMode ? $data['tgl_terkahir_bayar'] : ''; ?>">
            </div>

            <div class="form-buttons">
                <button type="submit" name="submit" class="btn-submit">Submit</button>
                <a href="Member.php" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>