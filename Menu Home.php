<!DOCTYPE html>
<html lang="id">

<?php
require('./core/url.php');

include('./core/header.php');
?>

<body>

  <?php menuActiveClass('home'); ?>

  <div class="kotak">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./img/LDKS/IMG_0018.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/LDKS/IMG_0021.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./img/LDKS/IMG_0028.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id illo dolores totam rerum explicabo quis repudiandae. Fugit vel recusandae tempora, aperiam distinctio nisi eveniet voluptatem sit deleniti. Sunt, fugit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id illo dolores totam rerum explicabo quis repudiandae. Fugit vel recusandae tempora, aperiam distinctio nisi eveniet voluptatem sit deleniti. Sunt, fugit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id illo dolores totam rerum explicabo quis repudiandae. Fugit vel recusandae tempora, aperiam distinctio nisi eveniet voluptatem sit deleniti. Sunt, fugit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id illo dolores totam rerum explicabo quis repudiandae. Fugit vel recusandae tempora, aperiam distinctio nisi eveniet voluptatem sit deleniti. Sunt, fugit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id illo dolores totam rerum explicabo quis repudiandae. Fugit vel recusandae tempora, aperiam distinctio nisi eveniet voluptatem sit deleniti. Sunt, fugit.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id illo dolores totam rerum explicabo quis repudiandae. Fugit vel recusandae tempora, aperiam distinctio nisi eveniet voluptatem sit deleniti. Sunt, fugit.
    </p>
  </div>
</body>
<?php include('./core/footer.php'); ?>


</html>