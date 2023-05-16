<?php
include('./core/url.php');
include('./core/header.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>SMK Assyafi'iyyah 01 Jakarta</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" href="img/D2.jpg" type="image/x-icon">
  <link rel="stylesheet" href="./css/tour.css">
</head>

<body>
  <?php navbar("tour");?>

  <div class="container-xxl kotak ">
    <h1 class="teks-judul" style="text-align: center; margin-top: 0.2em;">Study Tour</h1>
      <hr>
      <div class="container-fluid">
        <div id="FotoFotoRuangLab-interval" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#FotoFotoRuangLab-interval" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active" data-bs-interval="10000">
              <img src="./img/LDKS/img_0060.jpg" class="wow" alt="Ruang Lab AKL">
              <div class="carousel-caption">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="./img/LDKS/img (12).jpg" class="wow" alt="Ruang Lab OTKP">
              <div class="carousel-caption">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/LDKS/img (16).JPG" class="wow" alt="Ruang Lab RPL">
              <div class="carousel-caption">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/LDKS/img (17).JPG" class="wow" alt="Ruang Lab RPL">
              <div class="carousel-caption">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./img/LDKS/img (19).JPG" class="wow" alt="Ruang Lab RPL">
              <div class="carousel-caption">
                <h5></h5>
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
        <hr>
        <p style="text-align: justify;">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem illo praesentium magni eligendi pariatur et neque mollitia dolor quia dolore! Soluta voluptas sint architecto, nemo recusandae earum ducimus quas suscipit?
        </p>
        <h3 style="margin-left: -0.35em;">Tujuan</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nemo possimus eum, cumque, perferendis sequi dignissimos quas deleniti facere non recusandae consequatur veritatis modi iusto voluptate suscipit iste autem quae.
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab amet quibusdam iusto nemo incidunt, aliquam consequuntur corrupti doloremque neque, necessitatibus a, veritatis rerum sunt quisquam id excepturi error fugit nisi?
        </p>
        <h3 style="margin-left: -0.35em;">Lokasi</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorum error in odio illum, aliquid cum officiis tempore laboriosam culpa quaerat, magni, saepe nesciunt maxime iusto dolor blanditiis! Ex, autem?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos qui beatae animi tempora quidem aut odit tenetur deleniti harum dolor commodi maxime praesentium expedita, consequatur enim magni sed a molestias!
        </p>
        <h3 style="margin-left: -0.35em;">Fasilitas</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis, laboriosam error, repellendus atque expedita, magnam excepturi ipsum illum eligendi in ducimus facilis iure est dolorum cupiditate maxime ab at.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea eius debitis molestias tempora nesciunt nulla non, aliquam, laudantium, expedita minima similique voluptas excepturi quam labore? Odit culpa voluptatibus enim placeat.
        </p>
        <h3 style="margin-left: -0.35em;">Manfaat</h3>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, nihil laboriosam. Aliquid temporibus tenetur ipsam sed provident! Cupiditate, autem quaerat sunt ex fuga delectus dicta soluta dolorum vero et voluptates?
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet consequatur asperiores dicta quo esse explicabo cupiditate tempora tenetur, enim, quam ex odit, voluptatem earum ipsam quae illo rerum cum iste!
        <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque autem, rerum voluptate aperiam dolore exercitationem tenetur, sequi repellat necessitatibus consectetur earum. Illo provident et, ex odit expedita ipsum nesciunt sequi!
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, veritatis magnam ratione incidunt aspernatur corrupti quam nulla iure vitae nesciunt est reprehenderit repudiandae hic possimus exercitationem dolorum beatae modi necessitatibus?
    </p>
      </div>
  </div>
</body>
</html>
<?php 
include('./core/footer.php');?>