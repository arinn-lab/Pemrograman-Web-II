<html>
<body>
    <form method="POST" action="">
        Nilai : <input type="number" name="nilai" value="<?php echo isset($_POST['nilai']) ? $_POST['nilai'] : ''; ?>"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];

        if ($nilai == 0) {
            echo "<h2>Hasil: nol</h2>";
        } elseif ($nilai > 0 && $nilai < 10) {
            echo "<h2>Hasil: satuan</h2>";
        } elseif ($nilai >= 11 && $nilai <= 19) {
            echo "<h2>Hasil: belasan</h2>";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai <= 99)) {
            echo "<h2>Hasil: puluhan</h2>";
        } elseif ($nilai >= 100 && $nilai <= 999) {
            echo "<h2>Hasil: ratusan</h2>";
        } else {
            echo "<h2>Anda Menginput Melebihi Limit Bilangan</h2>";
        }
    }
    ?>
</body>
</html>