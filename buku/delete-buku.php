<?php
include "../koneksi.php";
$id = $_GET['id'];

// Query untuk menghapus data
$sql = "DELETE FROM tb_buku WHERE id = $id";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil dihapus.";
    header("location:buku.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
