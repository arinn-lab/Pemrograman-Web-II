<html>
<body>
    <style>
        .merah {
            color: red;
            font-weight: bold;
            font-size: 24px;
        }
        .hijau {
            color: green;
            font-weight: bold;
            font-size: 24px;
        }
    </style>

    <form action="" method="POST">
        Jumlah Peserta : <input type="number" name="jumlah" value="<?= isset($_POST['jumlah']) ? $_POST['jumlah'] : '' ?>"><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            if ($i % 2 != 0) {
                echo "<h2 class='merah'>Peserta ke-$i</h2>";
            } else {
                echo "<h2 class='hijau'>Peserta ke-$i</h2>";
            }
            $i++;
        }
    }
    ?>

</body>
</html>