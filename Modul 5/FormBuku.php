<?php
require_once("Model.php");

$editMode = false;
$data = [];

if (isset($_GET['edit'])) {
    $editMode = true;
    $data = getBukuById($_GET['edit']);
}

if (isset($_POST['submit'])) {
    if ($editMode) {
        updateBuku(
            $_POST['id_buku'],
            $_POST['judul_buku'],
            $_POST['penulis'],
            $_POST['penerbit'],
            $_POST['tahun_terbit']
        );
    } else {
        insertBuku(
            $_POST['judul_buku'],
            $_POST['penulis'],
            $_POST['penerbit'],
            $_POST['tahun_terbit']
        );
    }
    header("Location: Buku.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $editMode ? "Edit Buku" : "Tambah Buku"; ?></title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div class="form-container">

    <h1><?php echo $editMode ? "Edit Buku" : "Tambah Buku"; ?></h1>

    <div class="form-box">
        <form method="POST" action="">
            <?php if ($editMode): ?>
                <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
            <?php endif; ?>

            <div class="form-group">
                <label>Judul Buku</label>
                <input type="text" name="judul_buku" required value="<?php echo $editMode ? htmlspecialchars($data['judul_buku']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" name="penulis" required value="<?php echo $editMode ? htmlspecialchars($data['penulis']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Penerbit</label>
                <input type="text" name="penerbit" required value="<?php echo $editMode ? htmlspecialchars($data['penerbit']) : ''; ?>">
            </div>

            <div class="form-group">
                <label>Tahun Terbit</label>
                <input type="text" name="tahun_terbit" required value="<?php echo $editMode ? htmlspecialchars($data['tahun_terbit']) : ''; ?>">
            </div>

            <div class="form-buttons">
                <button type="submit" name="submit" class="btn-submit">Submit</button>
                <a href="Buku.php" class="btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

</div>
</body>
</html>