<html>
<head>
    <style>
        table, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 7px;
            text-align: center;
        }
    </style>
</head>
<body>

<form method="post" action="">
    Panjang : <input type="text" name="panjang" value="<?= isset($_POST['panjang']) ? $_POST['panjang'] : '' ?>"><br>
    Lebar : <input type="text" name="lebar" value="<?= isset($_POST['lebar']) ? $_POST['lebar'] : '' ?>"><br>
    Nilai : <input type="text" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
    <button type="submit" name="cetak">Cetak</button>
</form>

<?php
if (isset($_POST['cetak'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilaiString = $_POST['nilai'];

    $isiMatriks = explode(" ", $nilaiString);

    $jumlahInput = count($isiMatriks);

    if ($jumlahInput != ($panjang * $lebar)) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {
        echo "<table>";
        $index = 0;
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td>" . $isiMatriks[$index] . "</td>";
                $index++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>