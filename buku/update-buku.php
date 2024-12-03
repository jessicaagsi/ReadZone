<?php
include '../koneksi.php'; // Koneksi ke database

// Ambil data dari form
$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$id_kategori = $_POST['id_kategori'];

// Validasi sederhana
if (empty($judul) || empty($pengarang) || empty($penerbit) || empty($tahun_terbit) || empty($id_kategori)) {
    die("Semua field wajib diisi!");
}

// Query untuk update data buku
$sql = "UPDATE tb_buku SET 
            nama_buku = '$judul', 
            pengarang = '$pengarang', 
            penerbit = '$penerbit', 
            tahun_terbit = '$tahun_terbit', 
            id_kategori = '$id_kategori' 
        WHERE id = $id_buku";

// Eksekusi query
if ($koneksi->query($sql) === TRUE) {
    echo "Data buku berhasil diperbarui.";
    header("Location: buku.php"); 
    exit();
} else {
    echo "Error: " . $koneksi->error;
}
// Tutup koneksi
$koneksi->close();
?>
