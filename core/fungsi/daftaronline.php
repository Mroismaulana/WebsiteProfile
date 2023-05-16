<?php
// Mendapatkan nilai yang dikirimkan dari formulir
$namaLengkap = $_POST['NamaLengkapSiswa'];
$nomorInduk = $_POST['NomorIndukSiswa'];
$tempatLahir = $_POST['TempatLahirSiswa'];
$tanggalLahir = $_POST['TanggalLahirSiswa'];
$kewarganegaraan = $_POST['KewarganegaraanSiswa'];
$agama = $_POST['AgamaSiswa'];
$email = $_POST['EmailSiswa'];
$nomorTelepon = $_POST['NomorTeleponSiswa'];
$jenisKelamin = $_POST['JenisKelaminSiswa'];
$namaOrangTuaWali = $_POST['NamaOrangTuaWaliSiswa'];
$alamat = $_POST['AlamatSiswa'];
$pendidikanTerakhir = $_POST['PendidikanTerakhirSiswa'];
$namaSekolah = $_POST['NamaSekolahSiswa'];
$programStudi = $_POST['ProgramStudiSiswa'];

// Menyimpan data ke dalam file atau database
$data = "Nama Lengkap: $namaLengkap\n"
        . "Nomor Induk: $nomorInduk\n"
        . "Tempat Lahir: $tempatLahir\n"
        . "Tanggal Lahir: $tanggalLahir\n"
        . "Kewarganegaraan: $kewarganegaraan\n"
        . "Agama: $agama\n"
        . "Email: $email\n"
        . "Nomor Telepon: $nomorTelepon\n"
        . "Jenis Kelamin: $jenisKelamin\n"
        . "Nama Orang Tua / Wali: $namaOrangTuaWali\n"
        . "Alamat: $alamat\n"
        . "Pendidikan Terakhir: $pendidikanTerakhir\n"
        . "Nama Sekolah: $namaSekolah\n"
        . "Program Studi: $programStudi\n";

$namaFile = 'rekap_formulir.txt'; // Nama file untuk menyimpan data
// Kirim notifikasi ke admin
$adminEmail = 'admin@example.com'; // Ganti dengan alamat email admin yang valid
$subject = 'Notifikasi Formulir';
$message = 'Ada formulir baru yang telah diisi. Silakan cek halaman admin untuk melihat detailnya.';
$headers = 'From: admin@example.com' . "\r\n" .
    'Reply-To: admin@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($adminEmail, $subject, $message, $headers);

// Menyimpan data ke dalam file
$file = fopen($namaFile, 'a'); // Membuka file dengan mode append
fwrite($file, $data);
fclose($file);

// Tampilkan pesan berhasil atau redirect ke halaman baru
echo "Formulir berhasil dikirim!";
?>
