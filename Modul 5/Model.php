<?php
require_once("Koneksi.php");

function getAllMember() {
    $stmt = koneksi()->prepare("SELECT * FROM member ORDER BY id_member ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getMemberById($id) {
    $stmt = koneksi()->prepare("SELECT * FROM member WHERE id_member = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertMember($nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, tgl_mendaftar, tgl_terkahir_bayar)
            VALUES (:nama, :nomor, :alamat, :tgl_mendaftar, :tgl_bayar)";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute([
        ':nama'          => $nama,
        ':nomor'         => $nomor,
        ':alamat'        => $alamat,
        ':tgl_mendaftar' => $tgl_mendaftar,
        ':tgl_bayar'     => $tgl_bayar
    ]);
}

function updateMember($id, $nama, $nomor, $alamat, $tgl_mendaftar, $tgl_bayar) {
    $sql = "UPDATE member SET nama_member=:nama, nomor_member=:nomor, alamat=:alamat,
            tgl_mendaftar=:tgl_mendaftar, tgl_terkahir_bayar=:tgl_bayar WHERE id_member=:id";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute([
        ':id'            => $id,
        ':nama'          => $nama,
        ':nomor'         => $nomor,
        ':alamat'        => $alamat,
        ':tgl_mendaftar' => $tgl_mendaftar,
        ':tgl_bayar'     => $tgl_bayar
    ]);
}

function deleteMember($id) {
    $stmt = koneksi()->prepare("DELETE FROM member WHERE id_member = :id");
    $stmt->execute([':id' => $id]);
}

function getAllBuku() {
    $stmt = koneksi()->prepare("SELECT * FROM buku ORDER BY id_buku ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBukuById($id) {
    $stmt = koneksi()->prepare("SELECT * FROM buku WHERE id_buku = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit)
            VALUES (:judul, :penulis, :penerbit, :tahun)";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute([
        ':judul'    => $judul,
        ':penulis'  => $penulis,
        ':penerbit' => $penerbit,
        ':tahun'    => $tahun
    ]);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $sql = "UPDATE buku SET judul_buku=:judul, penulis=:penulis,
            penerbit=:penerbit, tahun_terbit=:tahun WHERE id_buku=:id";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute([
        ':id'       => $id,
        ':judul'    => $judul,
        ':penulis'  => $penulis,
        ':penerbit' => $penerbit,
        ':tahun'    => $tahun
    ]);
}

function deleteBuku($id) {
    $stmt = koneksi()->prepare("DELETE FROM buku WHERE id_buku = :id");
    $stmt->execute([':id' => $id]);
}

function getAllPeminjaman() {
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman ORDER BY id_peminjaman ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPeminjamanById($id) {
    $stmt = koneksi()->prepare("SELECT * FROM peminjaman WHERE id_peminjaman = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali)
            VALUES (:id_member, :id_buku, :tgl_pinjam, :tgl_kembali)";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute([
        ':id_member'   => $id_member,
        ':id_buku'     => $id_buku,
        ':tgl_pinjam'  => $tgl_pinjam,
        ':tgl_kembali' => $tgl_kembali
    ]);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    $sql = "UPDATE peminjaman SET id_member=:id_member, id_buku=:id_buku,
            tgl_pinjam=:tgl_pinjam, tgl_kembali=:tgl_kembali WHERE id_peminjaman=:id";
    $stmt = koneksi()->prepare($sql);
    $stmt->execute([
        ':id'          => $id,
        ':id_member'   => $id_member,
        ':id_buku'     => $id_buku,
        ':tgl_pinjam'  => $tgl_pinjam,
        ':tgl_kembali' => $tgl_kembali
    ]);
}

function deletePeminjaman($id) {
    $stmt = koneksi()->prepare("DELETE FROM peminjaman WHERE id_peminjaman = :id");
    $stmt->execute([':id' => $id]);
}
?>