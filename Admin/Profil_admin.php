<?php
include("../core/url.php");
include("../core/header.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>SMK Assyafi'iyyah 01 Jakarta</title>
    <link rel="stylesheet" href="../css/profil.css">
    <link rel="shortcut icon" href="../img/D2.jpg" type="image/x-icon">

</head>
<body>
  
  <?php navbar("profadm");?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Profil Guru</h1>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <img class="guru-img" src="../img/P1.jpg" alt="Kepala Sekolah">
        <h2>Kepala Sekolah</h2>
        <p>Reza Pahlevi S.pd</p>
      </div>
      <div class="col kanan">
        <img class="guru-img" src="../img/P1.jpg" alt="Wakil Kesiswaan">
        <h2>Wakil Kesiswaan</h2>
        <p>Devy Arintika S.pd</p>
      </div>
      <div class="col">
        <img class="guru-img" src="../img/P1.jpg" alt="Wakil Kesiswaan">
        <h2>Bimbingan Konseling</h2>
        <p>Rusmini S.pd</p>
      </div>
      <div class="col kanan">
        <img class="guru-img" src="../img/P1.jpg" alt="Wakil Kesiswaan">
        <h2>Kepala Program OTKP</h2>
        <p>Firmansyah S.pd</p>
      </div>
      <div class="col">
        <img class="guru-img" src="../img/P1.jpg" alt="Wakil Kesiswaan">
        <h2>Kepala Program AKL</h2>
        <p>Devy Arintika S.pd</p>
      </div>
      <div class="col kanan">
        <img class="guru-img" src="../img/P1.jpg" alt="Wakil Kesiswaan">
        <h2>Kepala Perogram RPL</h2>
        <p>Retno Wulandari S.kom</p>
      </div>
    </div>

    <!-- Tambahkan guru-guru lainnya di sini -->
    
  </div>
</body>
<?php
include('../core/footer.php');


?>
</html>