<?php
include"../koneksi.php"; // Koneksi ke database
require_once("../dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
// Query untuk mendapatkan data buku beserta kategori
$query = mysqli_query($koneksi, "
    SELECT tb_buku.id, tb_buku.nama_buku, tb_buku.pengarang, tb_buku.penerbit, 
           tb_buku.tahun_terbit, tb_kategori.kategori 
    FROM tb_buku 
    LEFT JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id
");

// Membuat struktur HTML untuk laporan
$html = '<center><h3>Laporan Data Buku</h3></center><hr/><br>';
$html .= '<table border="1" width="100%" style="border-collapse: collapse;">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
            </tr>';
$no = 1;

while ($buku = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . htmlspecialchars($buku['nama_buku']) . "</td>
                <td>" . htmlspecialchars($buku['pengarang']) . "</td>
                <td>" . htmlspecialchars($buku['penerbit']) . "</td>
                <td>" . $buku['tahun_terbit'] . "</td>
                <td>" . htmlspecialchars($buku['kategori'] ?: 'Tidak Ada') . "</td>
              </tr>";
    $no++;
}

$html .= "</table>";

// Memuat HTML ke dalam DOMPDF
$dompdf->loadHtml($html);

// Mengatur ukuran kertas dan orientasi
$dompdf->setPaper('A4', 'landscape');

// Merender PDF
$dompdf->render();

// Menyimpan dan memaksa unduhan file PDF
$dompdf->stream('laporan-buku.pdf');
?>
