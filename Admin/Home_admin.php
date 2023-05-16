<!DOCTYPE html>
<html lang="id">

<?php
require('../core/url.php');

include('../core/header.php');
include('../core/fungsi/menuhomeadm.php');
?>

<body>
  <?php navbar('adminhom'); ?>

  <div class="container-xxl kotak">
    <div class="container">
      <div id="slidefoto-main" class="carousel slide" data-bs-ride="false" style="margin-block: 10px;">
        <div class="carousel-indicators">
          <?php draw_indikasigambar("branda_foto", "slidefoto-main"); ?>
        </div>
        <div class="carousel-inner">
          <?php draw_slideFoto("branda_foto"); ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slidefoto-main" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slidefoto-main" data-bs-slide="next">
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

    <div class="container">
      <h4 class="text-start">Acara Mendatang!</h4>
      <hr>
      <div class="row">
        <div class="col-4">
        <img src='<?php echo get_infoAcara("branda_acara")[0]?>' alt='Event' class="img-thumbnail" style="background-color: var(--bs-gray-500);">
        </div>
        <div class="col-8">
          <h5 class="text-start"><?php echo get_infoAcara("branda_acara")[1]?></h5>
          <hr>
          <p class="text-start">
          <?php echo get_infoAcara("branda_acara")[2]?>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include('../core/footer.php'); ?>


</html>