<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Proses pembayaran
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jumlah = $_POST['jumlah'];

    // Contoh: Menyimpan data pembayaran ke database atau menghubungkan ke gateway pembayaran
    // ...

    // Tampilkan konfirmasi
    echo "Pembayaran berhasil! Terima kasih, $nama.";
} else {
    // Redirect jika halaman diakses langsung
    header('Location: index.php');
    exit;
}
