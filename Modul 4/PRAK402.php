<html>
<head>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #D3D3D3;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    ["Nama" => "Andi", "NIM" => "2101001", "UTS" => 87, "UAS" => 65],
    ["Nama" => "Budi", "NIM" => "2101002", "UTS" => 76, "UAS" => 79],
    ["Nama" => "Tono", "NIM" => "2101003", "UTS" => 50, "UAS" => 41],
    ["Nama" => "Jessica", "NIM" => "2101004", "UTS" => 60, "UAS" => 75],
];

for ($i = 0; $i < count($mahasiswa); $i++) {
    $mahasiswa[$i]["Nilai Akhir"] = ($mahasiswa[$i]["UTS"] * 0.4) + ($mahasiswa[$i]["UAS"] * 0.6);

    if ($mahasiswa[$i]["Nilai Akhir"] >= 80) {
        $mahasiswa[$i]["Huruf"] = "A";
    } elseif ($mahasiswa[$i]["Nilai Akhir"] >= 70) {
        $mahasiswa[$i]["Huruf"] = "B";
    } elseif ($mahasiswa[$i]["Nilai Akhir"] >= 60) {
        $mahasiswa[$i]["Huruf"] = "C";
    } elseif ($mahasiswa[$i]["Nilai Akhir"] >= 50) {
        $mahasiswa[$i]["Huruf"] = "D";
    } else {
        $mahasiswa[$i]["Huruf"] = "E";
    }
}
?>

<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
    </tr>

    <?php
    for ($i=0; $i < count($mahasiswa); $i++) { 
        echo "<tr>";
        echo "<td>".$mahasiswa[$i]["Nama"]."</td>";
        echo "<td>".$mahasiswa[$i]["NIM"]."</td>";
        echo "<td>".$mahasiswa[$i]["UTS"]."</td>";
        echo "<td>".$mahasiswa[$i]["UAS"]."</td>";
        echo "<td>".$mahasiswa[$i]["Nilai Akhir"]."</td>";
        echo "<td>".$mahasiswa[$i]["Huruf"]."</td>";
        echo "</tr>";
    }       
    ?>
</table>
</body>
</html>