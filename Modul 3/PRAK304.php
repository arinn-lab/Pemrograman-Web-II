<html>
<body>
    <?php
    $bintang = isset($_POST['bintang']) ? $_POST['bintang'] : NULL;

    if (isset($_POST['tambah'])) {
        $bintang += 1;
    }
    if (isset($_POST['kurang'])) {
        if ($bintang > 0) $bintang -= 1;
    }

    if (empty($bintang)) { ?>
        <form action="" method="post">
            Jumlah bintang <input type="number" name="bintang"> <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php } 
    
    else {
        echo "Jumlah bintang $bintang <br><br><br><br>";
        
        for ($i = 0; $i < $bintang; $i++) {
            echo "<img src='bintang.png' style='width: 70px;'>";
        }
        ?>
        <form action="" method="post" style="margin-top: 7px;">
            <input type="hidden" name="bintang" value="<?= $bintang ?>">
            <button type="submit" name="tambah">Tambah</button><button type="submit" name="kurang">Kurang</button>
        </form>
    <?php } ?>
</body>
</html>