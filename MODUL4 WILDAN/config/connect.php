<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$db = mysqli_connect('localhost:8111','root','','modul4_wad');

// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if(!$db){
    die("Koneksi Gagal".mysql_connect_error());
}   

// 
 
?>