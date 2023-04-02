<?php 
include('./core/url.php');
include('./core/header.php');
menuActiveClass("Tour");
?>
<!DOCTYPE html>
<html>
<head>
    <title>SMK Assyafi'iyyah 01 Jakarta</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="img/D2.jpg" type="image/x-icon">

</head>
<body>
  <header>
    <div class="container">
  <ul>
    <li><img src="img/Logo.png" width="80px" ></li>
    <li><a href="Menu Home.html">Smk Asyafi'iyyah 01 Jakarta</a></li>
    <li><a href="./login-system/">Admin</a></li>
    <li><a href="Menu Visi Misi.html">Visi Misi</a></li>
    <li><a href="Profil Guru.html">Profil Guru</a></li>
    <li class="dropdown">
      <a  class="active" href="javascript:void(0)"
      class="dropbtn">Kegiatan</a>
      <div class="dropdown-content">
        <a href="Ekstrakulikuler.html">Ekstrakulikuler</a>
        <a class="mar" href="#">Study Tour</a>
        <a href="LDKS.html">LDKS</a>
      </div>
    </li>
    <li class="dropdown">
      <a href="javascript:void(0)"
                class="dropbtn">Fasilitas</a>
                <div class="dropdown-content">
                  <a href="Ruang Lab.html">Ruang Lab</a>
                  <a href="Jurusan.html">Jurusan</a>
                  <a href="Ujian.html">Ujian Berbasis Komputer</a>
                </div>
              </li>
              <li><a href="./Pendaftaran Online.html">Pendaftaran Online</a></li>
              <li><a href="Statistik.html">Statistik Calon Siswa Baru</a></li>
            </ul>
          </div>
  </header>
            
</body>
<?php
include('./core/db_con.php');
?>
</html>