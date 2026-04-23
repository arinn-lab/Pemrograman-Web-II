<html>
<body>
    <form action="" method="POST">
        Nilai : <input type="number" name="nilai" value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        Dari : <br>
        <input type="radio" name="dari" value="Celcius" <?= (isset($_POST['dari']) && $_POST['dari'] == "Celcius") ? "checked" : "" ?>> Celcius <br>
        <input type="radio" name="dari" value="Fahrenheit" <?= (isset($_POST['dari']) && $_POST['dari'] == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit <br>
        <input type="radio" name="dari" value="Rheamur" <?= (isset($_POST['dari']) && $_POST['dari'] == "Rheamur") ? "checked" : "" ?>> Rheamur <br>
        <input type="radio" name="dari" value="Kelvin" <?= (isset($_POST['dari']) && $_POST['dari'] == "Kelvin") ? "checked" : "" ?>> Kelvin <br>
        
        Ke : <br>
        <input type="radio" name="ke" value="Celcius" <?= (isset($_POST['ke']) && $_POST['ke'] == "Celcius") ? "checked" : "" ?>> Celcius <br>
        <input type="radio" name="ke" value="Fahrenheit" <?= (isset($_POST['ke']) && $_POST['ke'] == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit <br>
        <input type="radio" name="ke" value="Rheamur" <?= (isset($_POST['ke']) && $_POST['ke'] == "Rheamur") ? "checked" : "" ?>> Rheamur <br>
        <input type="radio" name="ke" value="Kelvin" <?= (isset($_POST['ke']) && $_POST['ke'] == "Kelvin") ? "checked" : "" ?>> Kelvin <br>
        
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST["konversi"])) {
    if (!empty($_POST["dari"]) && !empty($_POST["ke"])) {
        $nilai = $_POST["nilai"];

        $celciusTofahrenheit = (9/5 * $nilai) + 32;
        $celciusToreamur = 4/5 * $nilai;
        $celciusTokelvin = $nilai + 273.15;

        $fahrenheitTocelcius = 5/9 * ($nilai - 32);
        $fahrenheitToreamur = 4/9 * ($nilai - 32);
        $fahrenheitTokelvin = 5/9 * ($nilai - 32) + 273.15;

        $reamurTocelcius = 5/4 * $nilai;
        $reamurTofahrenheit = (9/4 * $nilai) + 32;
        $reamurTokelvin = 5/4 * $nilai + 273.15;

        $kelvinTocelcius = $nilai - 273.15;
        $kelvinTofahrenheit = 9/5 * ($nilai - 273.15) + 32;
        $kelvinToreamur = 4/5 * ($nilai - 273.15);

        echo "<h1>Hasil Konversi: ";

        if ($_POST["dari"] == "Celcius" && $_POST["ke"] == "Celcius") {
            echo $nilai . " &degC";
        } elseif ($_POST["dari"] == "Celcius" && $_POST["ke"] == "Fahrenheit") {
            echo number_format($celciusTofahrenheit, 1) . " &degF";
        } elseif ($_POST["dari"] == "Celcius" && $_POST["ke"] == "Rheamur") { // Ubah reamur jadi Rheamur
            echo number_format($celciusToreamur, 1) . " &degR";
        } elseif ($_POST["dari"] == "Celcius" && $_POST["ke"] == "Kelvin") {
            echo number_format($celciusTokelvin, 1) . " K";
        } 
        elseif ($_POST["dari"] == "Fahrenheit" && $_POST["ke"] == "Fahrenheit") {
            echo $nilai . " &degF";
        } elseif ($_POST["dari"] == "Fahrenheit" && $_POST["ke"] == "Celcius") {
            echo number_format($fahrenheitTocelcius, 1) . " &degC";
        } elseif ($_POST["dari"] == "Fahrenheit" && $_POST["ke"] == "Rheamur") {
            echo number_format($fahrenheitToreamur, 1) . " &degR";
        } elseif ($_POST["dari"] == "Fahrenheit" && $_POST["ke"] == "Kelvin") {
            echo number_format($fahrenheitTokelvin, 1) . " K";
        }
        elseif ($_POST["dari"] == "Rheamur" && $_POST["ke"] == "Rheamur") {
            echo $nilai . " &degR";
        } elseif ($_POST["dari"] == "Rheamur" && $_POST["ke"] == "Celcius") {
            echo number_format($reamurTocelcius, 1) . " &degC";
        } elseif ($_POST["dari"] == "Rheamur" && $_POST["ke"] == "Fahrenheit") {
            echo number_format($reamurTofahrenheit, 1) . " &degF";
        } elseif ($_POST["dari"] == "Rheamur" && $_POST["ke"] == "Kelvin") {
            echo number_format($reamurTokelvin, 1) . " K";
        }
        elseif ($_POST["dari"] == "Kelvin" && $_POST["ke"] == "Kelvin") {
            echo $nilai . " K";
        } elseif ($_POST["dari"] == "Kelvin" && $_POST["ke"] == "Celcius") {
            echo number_format($kelvinTocelcius, 1) . " &degC";
        } elseif ($_POST["dari"] == "Kelvin" && $_POST["ke"] == "Fahrenheit") {
            echo number_format($kelvinTofahrenheit, 1) . " &degF";
        } elseif ($_POST["dari"] == "Kelvin" && $_POST["ke"] == "Rheamur") {
            echo number_format($kelvinToreamur, 1) . " &degR";
        }

            echo "</h1>";
        }
    }
    ?>
</body>
</html>