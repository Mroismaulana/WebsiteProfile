<!DOCTYPE html>
<html lang="id">

<?php
include("./core/url.php");
include("./core/header.php");
menuActiveClass('daftaronline')

?>

<body>
    <div class="kotak-daftar mb-auto">
        <h1 style="text-align: center;">Form Pendaftaran Siswa Baru</h1><br>
        <form action="" method="get">
            <div class="container">
                <div class="row">
                    <h3 class="teks-h3 mb-4">Data Diri</h3>
                    <div class="col mb-3">
                        <label for="NamaLengkap" class="form-label fs-6">Nama Lengkap:*</label><br>
                        <input type="text" name="NamaLengkapSiswa" id="InputDataDiri" placeholder="Masukan Nama Lengkap" required>
                    </div>
                    <div class="col mb-3">
                        <label for="NomorInduk" class="form-label fs-6">Nomor Induk (NIK):*</label><br>
                        <input type="text" name="NomorIndukSiswa" id="InputDataDiri" placeholder="34.XX.XXXX.XXXX" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="TempatLahir" class="form-label fs-6">Tempat Lahir:*</label><br>
                                <input type="text" name="TempatLahirSiswa" id="InputDataDiri" placeholder="Masukan Tempat Lahir" required>
                            </div>
                            <div class="col mb-3">
                                <label for="TanggalLahir" class="form-label fs-6">Tanggal Lahir:*</label><br>
                                <input type="date" name="TempatLahirSiswa" id="InputDataDiri" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="Kewarganegaraan" class="form-label fs-6">Kewarganegaraan:*</label><br>
                                <select name="KewarganegaraanSiswa" id="InputDataDiri" required>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Singapura">Singapura</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Vietnam">Vietnam</option>
                                </select>
                                <!-- <input type="text" name="TempatLahirSiswa" id="InputDataDiri" placeholder="Masukan Tempat Lahir"> -->
                            </div>
                            <div class="col mb-3">
                                <label for="Agama" class="form-label fs-6">Agama:*</label><br>
                                <select name="AgamaSiswa" id="InputDataDiri" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="Email" class="form-label fs-6">Email:</label><br>
                                <input type="email" name="EmailSiswa" id="InputDataDiri" placeholder="nama@contoh.com">
                            </div>
                            <div class="col mb-3">
                                <label for="NomorTelepon" class="form-label fs-6">Nomor Telepon (Wali/Murid):*</label><br>
                                <input type="text" name="EmailSiswa" id="InputDataDiri" placeholder="08XXXXXXXXXXXX">
                            </div>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="JenisKelamin" class="form-label fs-6">Jenis Kelamin:*</label><br>
                                <select name="JenisKelaminSiswa" id="InputDataDiri" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="pria">Laki - Laki</option>
                                    <option value="wanita">Perempuan</option>
                                </select>
                                <!-- <input type="text" name="TempatLahirSiswa" id="InputDataDiri" placeholder="Masukan Tempat Lahir"> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="NamaOrangTuaWali" class="form-label fs-6">NamaOrangTua / Wali:*</label><br>
                                <input type="text" name="NamaOrangTuaWaliSiswa" id="InputDataDiri" placeholder="Nama Lengkap Orang Tua / Wali" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="teks-h3 mb-3">Data Alamat Asal</h3>
                    <div class="col mb-3">
                        <label for="Alamat" class="form-label fs-6">Alamat Lengkap:</label>
                        <textarea name="AlamatSiswa" id="InputDataDiri" cols="30" rows="5" placeholder="Nama Jalan"></textarea>
                    </div>
                </div>
                <div class="row">
                    <h3 class="teks-h3 mb-3">Data Pendidikan</h3>
                    <div class="col mb-3">
                        <label for="PendidikanTerakhir" class="form-label fs-6">Pendidikan Terakhir:</label><br>
                        <select name="PendidikanTerakhirSiswa" id="InputDataDiri">
                            <option value="">-- Pendidikan Terakhir --</option>
                            <option value="SMA/SMK">SMA / SMK</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                    </div>
                    <div class="col mb-3">
                        <label for="NamaSekolah" class="form-label fs-6">Nama Sekolah:</label><br>
                        <input type="text" name="NamaSekolahSiswa" id="InputDataDiri" placeholder="Masukan Nama Sekolah">
                    </div>
                </div>
                <div class="row">
                    <h3 class="teks-h3 mb-3">Pilihan Program Studi</h3>
                    <div class="col mb-3">
                        <label for="ProgramStudi">Pilih Jurusan:</label><br>
                        <select name="ProgramStudiSiswa" id="InputDataDiri" required>
                            <option value="">-- Jurusan --</option>
                            <option value="AKL">Akutansi (AKL)</option>
                            <option value="OTKP">Perkantoran (OTKP)</option>
                            <option value="RPL">Rekayasa Prangkat Lunak (RPL)</option>
                        </select>
                    </div>
                    <div class="col">
                        <br>
                        <input type="submit" value="Kirim">
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </form>
    </div>
<?php
include('./core/footer.php');
?>

</body>

</html>