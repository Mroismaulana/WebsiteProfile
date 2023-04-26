<?php
include "./core/db_con.php";
// include "./core/url.php";

#region get
function get_jmlBarisTblFoto($target_tabel)
{
    global $koneksi;
    $sql = "SELECT * FROM `$target_tabel`;";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_num_rows($hasil);
}

function get_pathtoimg($target_tabel, $id)
{
    global $koneksi;
    $sql = "SELECT `path_to_img` FROM `$target_tabel` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['path_to_img'];
}
function get_judulimg($target_tabel, $id)
{
    global $koneksi;
    $sql = "SELECT `judul_img` FROM `$target_tabel` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['judul_img'];
}
function get_deskripimg($target_tabel, $id)
{
    global $koneksi;
    $sql = "SELECT `deskripsi_img` FROM `$target_tabel` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['deskripsi_img'];
}

function get_imggotourl($target_tabel, $id)
{
    global $koneksi;
    $sql = "SELECT `goto_url` FROM `$target_tabel` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['goto_url'];
}
#endregion

#region draw-main slide
function draw_slideFoto($target_tabel)
{
    for ($index_slide = 1; $index_slide <= get_jmlBarisTblFoto($target_tabel); $index_slide++) {
        $path = dxurl() . get_pathtoimg($target_tabel, $index_slide);
        $judul = get_judulimg($target_tabel, $index_slide);
        $deskrip = get_deskripimg($target_tabel, $index_slide);
        $goto = dxurl() . get_imggotourl($target_tabel, $index_slide);
        if ($index_slide == 1) {
            if ($goto == "#") {
                echo "
                <div class='carousel-item active' data-bs-interval='1000'>
                <img src='$path' class='d-block w-100' alt='Ruang Fasilitas Lab AKL' width='556.8' height='517.6'>
                <div class='carousel-caption d-none d-md-block'>
                <h5>$judul</h5>
                <p>$deskrip</p>
                </div>
                </div>";
            } else {
                echo "
                <div class='carousel-item active' data-bs-interval='100'>
                <a href='$goto'>
                <img src='$path' class='d-block w-100' alt='Ruang Fasilitas Lab AKL' width='556.8' height='517.6'>
                </a>
                <div class='carousel-caption d-none d-md-block'>
                <h5>$judul</h5>
                <p>$deskrip</p>
                </div>
                </div>";
            }
        } else if ($index_slide > 1) {
            if ($goto == "#") {
                echo "
                <div class='carousel-item' data-bs-interval='1000'>
                <a href='$goto'>
                <img src='$path' class='d-block w-100' alt='Ruang Fasilitas Lab AKL' width='556.8' height='517.6'>
                </a>
                <div class='carousel-caption d-none d-md-block'>
                <h5>$judul</h5>
                <p>$deskrip</p>
                </div>
                </div>";
            } else {
                echo "
                <div class='carousel-item' data-bs-interval='100'>
                <img src='$path' class='d-block w-100' alt='Ruang Fasilitas Lab AKL' width='556.8' height='517.6'>
                <div class='carousel-caption d-none d-md-block'>
                <h5>$judul</h5>
                <p>$deskrip</p>
                </div>
                </div>";
            }
        } else {
            echo "";
        }
    }
}

function draw_indikasigambar($target_tabel, $target)
{
    for ($index_slide = 1; $index_slide <= get_jmlBarisTblFoto($target_tabel); $index_slide++) {
        $slide = $index_slide - 1;

        if ($index_slide == 1) {
            echo "<button type='button' data-bs-target='#$target' data-bs-slide-to='$slide' class='active' aria-current='true' aria-label='Slide $index_slide'></button>";
        } else if ($index_slide > 1) {
            echo "<button type='button' data-bs-target='#$target' data-bs-slide-to='$slide' aria-label='Slide $index_slide'></button>";
        } else {
            echo "";
        }
    }
}
#endregion

#region draw-acara
function get_infoAcara($target_tabel) {
    $path = dxurl() . get_pathtoimg($target_tabel, 1);
    $judul = get_judulimg($target_tabel, 1);
    $deskrip = get_deskripimg($target_tabel, 1);
    $goto = dxurl() . get_imggotourl($target_tabel, 1);

    return [$path, $judul, $deskrip, $goto];
}
#endregion
