<html>
<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $errorName = $errorNim = $errorGender = "";
    $nama = $nim = $gender = "";

    if (isset($_POST['submit'])) {
        if (empty($_POST['nama'])) {
            $errorName = "nama tidak boleh kosong";
        } else {
            $nama = $_POST['nama'];
        }

        if (empty($_POST['nim'])) {
            $errorNim = "nim tidak boleh kosong";
        } else {
            $nim = $_POST['nim'];
        }

        if (empty($_POST['gender'])) {
            $errorGender = "jenis kelamin tidak boleh kosong";
        } else {
            $gender = $_POST['gender'];
        }
    }
    ?>

    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
        <span class="error">* <?php echo $errorName; ?></span><br>
        Nim: <input type="text" name="nim" value="<?php echo $nim; ?>">
        <span class="error">* <?php echo $errorNim; ?></span><br>
        Jenis Kelamin : <span class="error">* <?php echo $errorGender; ?></span><br>
        <input type="radio" name="gender" value="Laki-Laki" <?php if($gender == "Laki-Laki") echo "checked"; ?>> Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" <?php if($gender == "Perempuan") echo "checked"; ?>> Perempuan<br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit']) && !empty($_POST['nama']) && !empty($_POST['nim']) && !empty($_POST['gender'])) {
        echo "<h1>Output</h1>";
        echo $_POST['nama'] . "<br>";
        echo $_POST['nim'] . "<br>";
        echo $_POST['gender'];
    }
    ?>

</body>
</html>