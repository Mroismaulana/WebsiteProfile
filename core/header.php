<head>
    <meta charset="UTF-8">
    <title>SMK Assyafi'iyyah 01 Jakarta</title>

    <link rel="shortcut icon" href="./img/D2.jpg" type="image/x-icon">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./css/bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="<?php url(); ?>css/bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php url(); ?>css/bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap-utilities.css">
    <link rel="stylesheet" href="<?php url(); ?>css/daftaronline.css">
    <link rel="stylesheet" href="<?php url(); ?>css/style.css">

    <style>
        /*background*/
        body {
            background-image: url("<?php url();?>img/D3.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>

<?php
function menuActiveClass($nama){
    $_url = dxurl();
    if ($nama === 'home'){
        echo "
        <header>
        <ul class='mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='active' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='' href='./login-system/'>Admin</a></li>
            <li><a class='' href=''>Visi Misi</a></li>
            <li><a class='' href='Profil Guru.html'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.html'>Ekstrakulikuler</a>
                    <a href='Study Tour.html'>Study Tour</a>
                    <a href='LDKS.html'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.html'>Ruang Lab</a>
                    <a href='Jurusan.html'>Jurusan</a>
                    <a href='Ujian.html'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'daftaronline'){
        echo "
        <header>
        <ul class='mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='' href='./login-system/'>Admin</a></li>
            <li><a class='' href=''>Visi Misi</a></li>
            <li><a class='' href='Profil Guru.html'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.html'>Ekstrakulikuler</a>
                    <a href='Study Tour.html'>Study Tour</a>
                    <a href='LDKS.html'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.html'>Ruang Lab</a>
                    <a href='Jurusan.html'>Jurusan</a>
                    <a href='Ujian.html'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='active' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'stat'){
        echo "
        <header>
        <ul class='mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='' href='./login-system/'>Admin</a></li>
            <li><a class='' href=''>Visi Misi</a></li>
            <li><a class='' href='Profil Guru.html'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.html'>Ekstrakulikuler</a>
                    <a href='Study Tour.html'>Study Tour</a>
                    <a href='LDKS.html'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.html'>Ruang Lab</a>
                    <a href='Jurusan.html'>Jurusan</a>
                    <a href='Ujian.html'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='active' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
}
?>