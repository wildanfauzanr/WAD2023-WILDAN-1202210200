<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include "connect.php";

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];
$sql = "DELETE FROM showroom_mobil where id=$id";
mysqli_query($conn, $sql);
if ($sql) {
    echo "<script>alert('data berhasil dihapus')</script>";
    echo "<meta http-equiv='refresh' content='1 url =list_mobil.php'>";
}
// Tutup ko
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    // (4) Buatkan perkondisi jika eksekusi query berhasil
// Tutup koneksi ke database setelah selesai menggunakan database
$conn->close();
?>