<head>
    <meta charset="UTF-8">
    <title>SMK Assyafi'iyyah 01 Jakarta</title>

    <link rel="shortcut icon" href="./img/D2.jpg" type="image/x-icon">

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="./css/bootstrap/bootstrap.css"> -->
    <link rel="stylesheet" href="./css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap-utilities.css">
    <link rel="stylesheet" href="./css/style.css">

    <script src="./../js/bootstrap/bootstrap.js"></script>
    <script src="./../js/bootstrap/bootstrap.bundle.js"></script>
</head>

<?php
function menuActiveClass($nama){
    $_url = dxurl();
    if ($nama === 'home'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a active' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'daftaronline'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a active' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'stat'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a active' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'ekskul'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'visimisi'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a active' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>w
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'jurus'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'ldks'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'profil'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a active' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'lab'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'tour'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";
    }
    else if ($nama === 'ujian'){
        echo "
        <header>
        <ul class=' menu mb-auto container-lg'>
            <li><img src='{$_url}img/Logo.png' width='80px'></li>
            <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
            <li><a class='menu-a ' href='./login-system/'>Admin</a></li>
            <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
            <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
            <li class='dropdown'>
                <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                <div class='dropdown-content'>
                    <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                    <a href='Study Tour.php'>Study Tour</a>
                    <a href='LDKS.php'>LDKS</a>
                </div>
            </li>
            <li class='dropdown'>
                <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                <div class='dropdown-content'>
                    <a href='Ruang Lab.php'>Ruang Lab</a>
                    <a href='Jurusan.php'>Jurusan</a>
                    <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                </div>
            </li>
            <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
            <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
        </ul>
    </header>
        ";}
        else if ($nama === 'Ujian'){
            echo "
            <header>
            <ul class=' menu mb-auto container-lg'>
                <li><img src='{$_url}img/Logo.png' width='80px'></li>
                <li><a class='menu-a ' href='{$_url}Menu Home.php'>Smk Asyafi'iyyah 01 Jakarta</a></li>
                <li><a class='menu-a s' href='./login-system/'>Admin</a></li>
                <li><a class='menu-a ' href='Menu Visi Misi.php'>Visi Misi</a></li>
                <li><a class='menu-a ' href='Profil Guru.php'>Profil Guru</a></li>
                <li class='dropdown'>
                    <a class='menu-a ' href='javascript:void(0)' class='dropbtn'>Kegiatan</a>
                    <div class='dropdown-content'>
                        <a href='Ekstrakulikuler.php'>Ekstrakulikuler</a>
                        <a href='Study Tour.php'>Study Tour</a>
                        <a href='LDKS.php'>LDKS</a>
                    </div>
                </li>
                <li class='dropdown'>
                    <a class='menu-a active' href='javascript:void(0)' class='dropbtn'>Fasilitas</a>
                    <div class='dropdown-content'>
                        <a href='Ruang Lab.php'>Ruang Lab</a>
                        <a href='Jurusan.php'>Jurusan</a>
                        <a href='Ujian.php'>Ujian Berbasis Komputer</a>
                    </div>
                </li>
                <li><a class='menu-a ' href='{$_url}Pendaftaran Online.php'>Pendaftaran Online</a></li>
                <li><a class='menu-a ' href='Statistik.php'>Statistik Calon Siswa Baru</a></li>
            </ul>
        </header>
            ";}

}
?>