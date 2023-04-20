<?php
include "./core/db_con.php";
// include "./core/url.php";

function get_jmlBarisTblFoto($koneksi){
    $sql = "SELECT * FROM `foto_beranda`;";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_num_rows($hasil);
}

function get_pathtoimg($id){
    global $koneksi;
    $sql = "SELECT `path_to_img` FROM `foto_beranda` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['path_to_img'];
}
function get_judulimg($id){
    global $koneksi;
    $sql = "SELECT `judul_img` FROM `foto_beranda` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['judul_img'];
}
function get_deskripimg($id){
    global $koneksi;
    $sql = "SELECT `deskripsi_img` FROM `foto_beranda` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);

    return mysqli_fetch_assoc($hasil)['deskripsi_img'];
}

function get_imggotourl($id){
    global $koneksi;
    $sql = "SELECT `goto_url` FROM `foto_beranda` WHERE `id`='$id';";
    $hasil = mysqli_query($koneksi, $sql);
    
    return mysqli_fetch_assoc($hasil)['goto_url'];
}

function draw_slideFoto(){

    global $koneksi;
    for ($index_slide = 1; $index_slide <= get_jmlBarisTblFoto($koneksi); $index_slide++){
        $path = dxurl().get_pathtoimg($index_slide);
        $judul = get_judulimg($index_slide);
        $deskrip = get_deskripimg($index_slide);
        $goto = dxurl().get_imggotourl($index_slide);
        if ($index_slide == 1){
            echo "
            <div class='carousel-item active' data-bs-interval='500'>
            <a href='$goto'>
            <img src='$path' class='d-block w-100' alt='Ruang Fasilitas Lab AKL' width='556.8' height='517.6'>
            </a>
            <div class='carousel-caption d-none d-md-block'>
            <h5>$judul</h5>
            <p>$deskrip</p>
            </div>
            </div>";
        }else if ($index_slide > 1) {
            echo "
            <div class='carousel-item' data-bs-interval='500'>
            <a href='$goto'>
            <img src='$path' class='d-block w-100' alt='Ruang Fasilitas Lab AKL' width='556.8' height='517.6'>
            </a>
            <div class='carousel-caption d-none d-md-block'>
            <h5>$judul</h5>
            <p>$deskrip</p>
            </div>
            </div>";
        }else {
            echo "";
        }
    }
}

function draw_indikasigambar(){
    global $koneksi;

    for ($index_slide = 1; $index_slide <= get_jmlBarisTblFoto($koneksi); $index_slide++) {
        $slide = $index_slide-1;

        if ($index_slide == 1){
            echo "<button type='button' data-bs-target='#main_slidefoto' data-bs-slide-to='$slide' class='active' aria-current='true' aria-label='Slide $index_slide'></button>";
        }else if ($index_slide > 1){
            echo "<button type='button' data-bs-target='#main_slidefoto' data-bs-slide-to='$slide' aria-label='Slide $index_slide'></button>";
        }else {
            echo "";
        }
    }
}
