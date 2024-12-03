<?php
include '../koneksi.php'; // Koneksi ke database

// Mendapatkan id_buku dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data buku berdasarkan id_buku
    $sql = "SELECT * FROM tb_kategori WHERE id = $id";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $kategori = $result->fetch_assoc();
    } else {
        echo "Kategori tidak ditemukan!";
        exit;
    }
} else {
    echo "ID buku tidak ditemukan!";
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            width: 400px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .card h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            color: #333;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #333;
            background-color: #fff;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #555;
        }

        .btn-submit:active {
            background-color: #222;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Edit Kategori</h2>
        <form action="update-kategori.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $kategori['id']; ?>">

            <div class="form-group">
                <label for="judul">Kategori Buku</label>
                <input type="text" id="judul" name="kategori" value="<?php echo $kategori['kategori']; ?>" required>
           
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
