<?php
$servername = "localhost";
$password = "";
$username = "";
$namadb = "";

$koneksi = new mysqli($servername, $username, $password);

if ($koneksi->connect_error){
    die("Koneksi Gagal: ".$koneksi->connect_error);
}

echo "Koneksi Berhasil";
?>