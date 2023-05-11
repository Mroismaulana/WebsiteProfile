<?php
include('./core/url.php');
include "./core/header.php";
?>
<!DOCTYPE html>
<html>

<head>
  <title>SMK Assyafi'iyyah 01 Jakarta</title>
  <link rel="shortcut icon" href="img/D2.jpg" type="image/x-icon">
  <link rel="stylesheet" href="./css/ujian.css">

</head>

<body>
  <?php navbar("lab"); ?>

  <!-- <img class="img1" src="img/P1.jpg">
  <img class="img2" src="img/P1.jpg">
  <img class="img3" src="img/P1.jpg"> -->

  <div class="container-xxl kotak ">
    <h1 class="teks-judul">Ujian Berbasis Komputer</h1>
      <hr>
      <div class="container-fluid">
        <div id="FotoFotoRuangLab-interval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="./img/Ruang_Ujian/ujian4.jpeg" class="" alt="Ruang Lab AKL">
              <div class="carousel-caption">
                <h5>Ujian Berbasis Komputer</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="./img/Ruang_Ujian/ujian1.jpeg" class="" alt="Ruang Lab OTKP">
              <div class="carousel-caption">
                <h5>Ujian Berbasis Komputer</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/Ruang_Ujian/ujian2.jpeg" class="" alt="Ruang Lab RPL">
              <div class="carousel-caption">
                <h5>Ujian Berbasis Komputer</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/Ruang_Ujian/ujian3.jpeg" class="" alt="Ruang Lab RPL">
              <div class="carousel-caption">
                <h5>Ujian Berbasis Komputer</h5>
                <p></p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="container-lg">
        <h2 class="teks-judul">Pembuka</h2>
        <hr>
        <p style="text-align: justify;">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem illo praesentium magni eligendi pariatur et neque mollitia dolor quia dolore! Soluta voluptas sint architecto, nemo recusandae earum ducimus quas suscipit?
        </p>
      </div>
  </div>




</body>
<?php
include('./core/footer.php');
?>

</html>