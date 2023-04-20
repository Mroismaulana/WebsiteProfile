<!DOCTYPE html>
<html lang="id">

<?php
require('./core/url.php');

include('./core/header.php');
include('./core/fungsi/menuhome.php');
?>

<body>
  <?php menuActiveClass('home'); ?>

  <div class="container-xxl kotak">
    <div class="container">
      <div id="main_slidefoto" class="carousel slide" data-bs-ride="false" style="margin-block: 10px;">
        <div class="carousel-indicators">
          <?php draw_indikasigambar();?>
        </div>
        <div class="carousel-inner">
          <?php draw_slideFoto();?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#main_slidefoto" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#main_slidefoto" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="container">
      <h4 class="text-start">Kata Pengantar</h4>
      <hr>
      <p class="text-start">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis provident neque tempore minima ad quidem voluptatem nostrum delectus fugiat exercitationem ab odit dolor pariatur nobis laborum, commodi velit. Iusto, ullam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis provident neque tempore minima ad quidem voluptatem nostrum delectus fugiat exercitationem ab odit dolor pariatur nobis laborum, commodi velit. Iusto, ullam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis provident neque tempore minima ad quidem voluptatem nostrum delectus fugiat exercitationem ab odit dolor pariatur nobis laborum, commodi velit. Iusto, ullam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis provident neque tempore minima ad quidem voluptatem nostrum delectus fugiat exercitationem ab odit dolor pariatur nobis laborum, commodi velit. Iusto, ullam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis provident neque tempore minima ad quidem voluptatem nostrum delectus fugiat exercitationem ab odit dolor pariatur nobis laborum, commodi velit. Iusto, ullam.
      </p>
    </div>
  </div>
</body>
<?php include('./core/footer.php'); ?>


</html>