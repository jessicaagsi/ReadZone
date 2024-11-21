<?php 
include 'koneksi.php'; // Pastikan file koneksi database sudah benar

// Ambil data dari form login
$requestUsername = $_POST['username'];
$requestPassword = $_POST['password'];

// Mulai session
session_start();

// Query gabungan untuk memeriksa di tabel `tb_anggota` dan `tb_petugas`
$sql = "
    SELECT username, password, 'anggota' AS role 
    FROM tb_anggota 
    WHERE username = ?
    UNION 
    SELECT username, password, 'petugas' AS role 
    FROM tb_petugas 
    WHERE username = ?
";

// Siapkan dan jalankan query
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("ss", $requestUsername, $requestUsername);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah username ditemukan di salah satu tabel
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verifikasi password
    if (password_verify($requestPassword, $user['password'])) {
        // Set session berdasarkan role
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        // Redirect sesuai role
        if ($user['role'] == 'anggota') {
            header('Location: dashboard.php');
        } else if ($user['role'] == 'petugas') {
            header('Location: dashboard-petugas.php');
        }
        exit();
    } else {
        // Password salah
        echo "
        <script>
            alert('Password Anda salah. Silakan coba lagi.');
            window.location = 'index.php';
        </script>
        ";
        exit();
    }
} else {
    // Username tidak ditemukan
    echo "
    <script>
        alert('Username atau password salah. Silakan coba lagi.');
        window.location = 'index.php';
    </script>
    ";
    exit();
}
?>
