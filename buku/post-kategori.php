<?php   
include '../koneksi.php';   

// Check if the form is submitted  
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
    $kategori = $_POST['kategori']; // Get the category from POST request  

    // Prepare the SQL statement  
    $sql = "INSERT INTO tb_kategori (kategori) VALUES (?)";  
    $stmt = $koneksi->prepare($sql);  

    // Bind parameter for avoiding SQL Injection; use "s" since kategori is a string  
    $stmt->bind_param("s", $kategori);  

    // Execute statement  
    if ($stmt->execute()) {  
        header("location:kategori.php"); // Redirect on success  
        exit(); // Make sure to exit after redirection  
    } else {  
        echo "Terjadi kesalahan, coba lagi nanti."; // Display error message  
    }  

    // Close statement  
    $stmt->close();  
}  

// Optional: Add an HTML form for input  
?> 