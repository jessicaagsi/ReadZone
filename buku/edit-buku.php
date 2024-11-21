<?php
include '../koneksi.php'; // Koneksi ke database

// Mendapatkan id_buku dari URL
if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];

    // Query untuk mengambil data buku berdasarkan id_buku
    $sql = "SELECT * FROM tb_buku WHERE id = $id_buku";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        $buku = $result->fetch_assoc();
    } else {
        echo "Buku tidak ditemukan!";
        exit;
    }
} else {
    echo "ID buku tidak ditemukan!";
    exit;
}

// Mengambil data kategori untuk dropdown
$sql_kategori = "SELECT * FROM tb_kategori";
$result_kategori = $koneksi->query($sql_kategori);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
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
        <h2>Edit Buku</h2>
        <form action="update-buku.php" method="POST">
            <input type="hidden" name="id_buku" value="<?php echo $buku['id']; ?>">

            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" id="judul" name="judul" value="<?php echo $buku['nama_buku']; ?>" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" id="pengarang" name="pengarang" value="<?php echo $buku['pengarang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" id="penerbit" name="penerbit" value="<?php echo $buku['penerbit']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" id="tahun_terbit" name="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>" required>
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori</label>
                <select id="id_kategori" name="id_kategori" required>
                    <option value="">Pilih Kategori</option>
                    <?php
                    while ($kategori = $result_kategori->fetch_assoc()) {
                        $selected = ($kategori['id'] == $buku['id']) ? 'selected' : '';
                        echo "<option value='" . $kategori['id'] . "' $selected>" . $kategori['kategori'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn-submit">Simpan Perubahan</button>
        </form>
    </div>
</body>
</html>
