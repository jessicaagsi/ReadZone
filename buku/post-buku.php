<?php 
include '../koneksi.php'; 

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$id_kategori = $_POST['id_kategori'];

// Query untuk menambahkan buku dengan prepared statement
$sql = "INSERT INTO tb_buku (id_kategori, nama_buku, pengarang, penerbit, tahun_terbit) 
        VALUES (?, ?, ?, ?, ?)";

// Persiapkan statement
$stmt = $koneksi->prepare($sql);

// Bind parameter untuk menghindari SQL Injection
$stmt->bind_param("ssssi", $id_kategori, $judul, $pengarang, $penerbit, $tahun_terbit);

// Eksekusi statement
if ($stmt->execute()) {
    header("location:buku.php");
} else {
    echo "Terjadi kesalahan, coba lagi nanti.";
}

// Tutup statement
$stmt->close();
?>
