<html>
<body>
    <form action="" method="POST">
        <input type="text" name="kata">
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $kata = $_POST["kata"];
        $panjang = strlen($kata);

        echo "<h3>Input:</h3>";
        echo "$kata";
        echo "<h3>Output:</h3>";

        for ($i = 0; $i < $panjang; $i++) {
            $karakter = $kata[$i];

            for ($j = 1; $j <= $panjang; $j++) {
                if ($j == 1) {
                    echo strtoupper($karakter);
                } else {
                    echo strtolower($karakter);
                }
            }
        }
    }
    ?>
</body>
</html>