<?php 
include 'koneksi.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $sql = "INSERT INTO tb_anggota VALUES(NULL, '$username', '$email', '$password')";
    
    if (mysqli_query($koneksi, $sql)) {
        header("location:index.php");
    } else {
        return "Terjadi kesalahan, coba lagi nanti.";
    }
?>
