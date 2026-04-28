<html>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah" value="<?= isset($_POST['bawah']) ? $_POST['bawah'] : '' ?>"><br>
        Batas Atas : <input type="number" name="atas" value="<?= isset($_POST['atas']) ? $_POST['atas'] : '' ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $bawah = $_POST["bawah"];
        $atas = $_POST["atas"];
        $i = $bawah;
        
        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='bintang.png' width='19px' height='19px'> ";
            } else {
                echo "$i ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>
</html>