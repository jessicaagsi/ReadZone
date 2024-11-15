<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustaka Kita - Form</title>
    <style>
        body {
            background-color: #d1b290;
            font-family: Arial, sans-serif;
            color: #422e2c;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #f4e4d1;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 1.5em;
            color: #422e2c;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #baa899;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #f8f1ea;
            color: #422e2c;
        }
        .form-container button {
            background-color: #422e2c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 10px;
        }
        .form-container button:hover {
            background-color: #2d1f1e;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Buku</h2>
        <form action="post-tambah.php" method="post">
            <input type="text" name="nama" placeholder="Nama Buku" required>
            <input type="text" name="pengarang" placeholder="Pengarang" required>
            <input type="text" name="penerbit" placeholder="Penerbit" required>
            <textarea name="deskripsi" placeholder="Deskripsi" rows="4"></textarea>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>
