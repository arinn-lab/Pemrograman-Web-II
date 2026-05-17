<?php
function koneksi() {
    try {
        $host = "localhost";
        $dbname = "perpustakaan";
        $username = "root";
        $password = "";
        
        $pdo_conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo_conn;
    } catch (PDOException $e) {
        echo "Koneksi gagal: " . $e->getMessage();
        die();
    }
}
?>