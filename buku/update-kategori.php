<?php
include "../koneksi.php";

// Ambil data dari form
$id = $_POST['id'];
$kategori = $_POST['kategori'];

// Validasi sederhana untuk mencegah input kosong
if (empty($kategori)) {
    die("Kategori tidak boleh kosong.");
}

// Query UPDATE
$sql = "UPDATE tb_kategori SET kategori = '$kategori' WHERE id = $id";

// Eksekusi query
if (mysqli_query($koneksi, $sql)) {
    echo "Kategori berhasil diperbarui.";
    header("Location: kategori.php");
    exit(); // Tambahkan exit setelah header untuk memastikan script berhenti
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
