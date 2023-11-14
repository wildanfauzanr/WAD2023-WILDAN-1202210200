<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
    require('connect.php');
 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $nama_mobil = $_POST["nama_mobil"];
        $brand_mobil = $_POST["brand_mobil"];
        $warna_mobil = $_POST["warna_mobil"];
        $tipe_mobil = $_POST["tipe_mobil"];
        $harga_mobil = $_POST["harga_mobil"];
        

// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil

    // b. Ambil data brand mobil

    // c. Ambil data warna mobil

    // d. Ambil data tipe mobil

    // e. Ambil data harga mobil

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
        $sql = "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES('$nama_mobil', '$brand_mobil', '$warna_mobil','$tipe_mobil', '$harga_mobil')";
        mysqli_query($conn,$sql);

    // (5) Buatkan kondisi jika eksekusi query berhasil
        if($sql){
            echo "<srcipt> alert('Data berhasil ditambahkan') </script>";
            echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>";
        }else{
            echo "<srcipt> alert('Gagal ditambahkan') </script>";
            echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>";
        }

    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 

// (7) Tutup koneksi ke database setelah selesai menggunakan database
    };
$conn->close();
?>

