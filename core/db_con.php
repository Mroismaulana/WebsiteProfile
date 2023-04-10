<?php
$servername = "localhost";
$password = "";
$username = "root";
$namadb = "db_websiteprofile";

$koneksi = new mysqli($servername, $username, $password,$namadb,);

if ($koneksi->connect_error){
    die("Koneksi Gagal: ".$koneksi->connect_error);
}

echo "Koneksi Berhasil";
?>