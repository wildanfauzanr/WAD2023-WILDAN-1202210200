<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$conn = mysqli_connect("localhost:8111","root","","modul3");

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
?>