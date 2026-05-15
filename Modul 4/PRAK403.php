<html>
<head>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        th { background-color: #D3D3D3; text-align: left; }
        .revisi { background-color: red; }
        .tidak-revisi { background-color: #4CBB17; }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    [
        "no" => 1, "nama" => "Ridho", 
        "matkul" => [
            ["nama_mk" => "Pemrograman I", "sks" => 2],
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
    ],
    [
        "no" => 2, "nama" => "Ratna", 
        "matkul" => [
            ["nama_mk" => "Basis Data I", "sks" => 2],
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
    ],
    [
        "no" => 3, "nama" => "Tono", 
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3],
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
    ]
];

foreach ($mahasiswa as &$mhs) {
    $totalSks = 0;
    foreach ($mhs["matkul"] as $mk) {
        $totalSks += $mk["sks"];
    }
    $mhs["total_sks"] = $totalSks;

    if ($mhs["total_sks"] < 7) {
        $mhs["keterangan"] = "Revisi KRS";
        $mhs["warna"] = "revisi";
    } else {
        $mhs["keterangan"] = "Tidak Revisi";
        $mhs["warna"] = "tidak-revisi";
    }
}
unset($mhs);
?>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>

    <?php foreach ($mahasiswa as $mhs): ?>
        <?php foreach ($mhs["matkul"] as $index => $mk): ?>
            <tr>
                <td><?php echo ($index == 0) ? $mhs["no"] : ""; ?></td>
                <td><?php echo ($index == 0) ? $mhs["nama"] : ""; ?></td>
                <td><?php echo $mk["nama_mk"]; ?></td>
                <td><?php echo $mk["sks"]; ?></td>
                <td><?php echo ($index == 0) ? $mhs["total_sks"] : ""; ?></td>
                <td class="<?php echo ($index == 0) ? $mhs["warna"] : ""; ?>">
                    <?php echo ($index == 0) ? $mhs["keterangan"] : ""; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

</body>
</html>