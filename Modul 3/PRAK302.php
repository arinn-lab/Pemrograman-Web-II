<html>
<body>
    <form action="" method="POST">
        Tinggi : <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
        Alamat Gambar : <input type="text" name="img" value="<?= isset($_POST['img']) ? $_POST['img'] : '' ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $tinggi = $_POST["tinggi"];
        $url = $_POST['img'];
        $i = 1;

        while ($i <= $tinggi) {
            $j = 1;
            while ($j < $i) {
                echo "<img src='$url' style='width: 20px; opacity: 0; margin-bottom: 4px;'>";
                $j++;
            }

            $k = $tinggi;
            while ($k >= $i) {
                echo "<img src='$url' style='width: 20px; margin-bottom: 4px;'>";
                $k--;
            }

            echo "<br>";
            $i++;
        }
    }
    ?>
</body>
</html>