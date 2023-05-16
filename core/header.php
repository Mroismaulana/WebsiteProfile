<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tugas Website Profile Sekolah Oleh Kelas RPL 2023">
    <title>SMK Assyafi'iyyah 01 Jakarta</title>

    <link rel="shortcut icon" href="<?php url();?>img/D2.jpg" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php url();?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php url();?>css/style.css">
</head>

<?php
function navbar($nama){
    if ($nama === 'home'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color menu-aktif' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'daftaronline'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color menu-aktif' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'stat'){
        echo "
<header>
<nav class='navbar navbar-expand-lg bar-navigasi'>
    <div class='container-fluid'>
        <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                class='d-inline-block text-white'>
            SMK Asyfai'iyah 01 Jakarta
        </a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
            aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNavDropdown'>
            <ul class='navbar-nav'>
            <li class='nav-item'>
            <a class='nav-link teks-bar-nav-color ' aria-current='page'
                href='./edit_admin.php'>+</a>
        </li>
                <li class='nav-item'>
                    <a class='nav-link teks-bar-nav-color ' aria-current='page'
                        href='./Home_admin.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link teks-bar-nav-color' href='./visi_admin.php'>Visi Misi</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link teks-bar-nav-color' href='./Profil_admin.php'>Profil Guru</a>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                        data-bs-toggle='dropdown' aria-expanded='false'>
                        Kegiatan
                    </a>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                        <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                        <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                    </ul>
                </li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                        data-bs-toggle='dropdown' aria-expanded='false'>
                        Fasilitas
                    </a>
                    <ul class='dropdown-menu'>
                        <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                        <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                        <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                    </ul>
                </li>
                <li class='nav-item'>
                    <a href='./statistik.php' class='nav-link teks-bar-nav-color menu-aktif'>Statistik Calon Siswa Baru</a>
                </li>
                <li style='float:right'>
                    <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>
        ";}
    else if ($nama === 'ekskul'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'visimisi'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color menu-aktif' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'jurus'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item admin'>
                        <a class='nav-link teks-bar-nav-color' class='login' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'ldks'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'profil'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color menu-aktif' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'lab'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'tour'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";
    }
    else if ($nama === 'ujian'){
        echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li class='nav-item tombol-login'>
                        <a class='nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
        ";}
        else if ($nama === 'Ujian'){
            echo "
<header>
    <nav class='navbar navbar-expand-lg bar-navigasi'>
        <div class='container-fluid'>
            <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                    class='d-inline-block text-white'>
                SMK Asyfai'iyah 01 Jakarta
            </a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                <ul class='navbar-nav'>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='Menu Home.php'>Home</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Menu Visi Misi.php'>Visi Misi</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Profil Guru.php'>Profil Guru</a>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Kegiatan
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ekstrakulikuler.php'>Ekstrakulikuler</a></li>
                            <li><a class='dropdown-item' href='Study Tour.php'>Study Tour</a></li>
                            <li><a class='dropdown-item' href='LDKS.php'>LDKS</a></li>
                        </ul>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                            data-bs-toggle='dropdown' aria-expanded='false'>
                            Fasilitas
                        </a>
                        <ul class='dropdown-menu'>
                            <li><a class='dropdown-item' href='Ruang Lab.php'>Ruang Lab</a></li>
                            <li><a class='dropdown-item' href='Jurusan.php'>Jurusan</a></li>
                            <li><a class='dropdown-item' href='Ujian.php'>Ujian Bebasis Komputer</a></li>
                        </ul>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color' href='Pendaftaran Online.php'>Pendaftaran Online</a>
                    </li>
                    
                    <li style='float:right'>
                        <a class=' nav-item nav-link teks-bar-nav-color' href='./login-system/'>Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
            ";}
            else if ($nama === 'adminhom'){
                echo "
    <header>
        <nav class='navbar navbar-expand-lg bar-navigasi'>
            <div class='container-fluid'>
                <a class='navbar-brand teks-bar-nav-color' href='#'><img src='./img/Logo.png' alt='Logo' width='50'
                        class='d-inline-block text-white'>
                    SMK Asyfai'iyah 01 Jakarta
                </a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                    aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                    <ul class='navbar-nav'>
                    <li class='nav-item'>
                    <a class='nav-link teks-bar-nav-color ' aria-current='page'
                        href='./edit_admin.php'>+</a>
                </li>
                        <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color menu-aktif' aria-current='page'
                                href='./Home_admin.php'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color' href='./Admin/visi_admin.php'>Visi Misi</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color' href='./Admin/Profil_admin.php'>Profil Guru</a>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                data-bs-toggle='dropdown' aria-expanded='false'>
                                Kegiatan
                            </a>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='./Admin/Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                <li><a class='dropdown-item' href='./Admin/Tour_admin.php'>Study Tour</a></li>
                                <li><a class='dropdown-item' href='./Admin/LDKS_admin.php'>LDKS</a></li>
                            </ul>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                data-bs-toggle='dropdown' aria-expanded='false'>
                                Fasilitas
                            </a>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='./Admin/Lab_admin.php'>Ruang Lab</a></li>
                                <li><a class='dropdown-item' href='./Admin/Jurusan_admin.php'>Jurusan</a></li>
                                <li><a class='dropdown-item' href='./Admin/Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                            </ul>
                        </li>
                        <li class='nav-item'>
                        <a href='./Admin/hasi.php' class='nav-link teks-bar-nav-color'>Rekap</a>
                    </li>
                        <li class='nav-item'>
                            <a href='./Admin/statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                        </li>
                        <li style='float:right'>
                            <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
                ";}
            else if ($nama === 'visiadm'){
                echo "
    <header>
        <nav class='navbar navbar-expand-lg bar-navigasi'>
            <div class='container-fluid'>
                <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                        class='d-inline-block text-white'>
                    SMK Asyfai'iyah 01 Jakarta
                </a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                    aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                    <ul class='navbar-nav'>
                    <li class='nav-item'>
                    <a class='nav-link teks-bar-nav-color ' aria-current='page'
                        href='./edit_admin.php'>+</a>
                </li>
                        <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                href='../Home_admin.php'>Home</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color menu-aktif' href='./visi_admin.php'>Visi Misi</a>
                        </li>
                        <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color' href='./Profil_admin.php'>Profil Guru</a>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                data-bs-toggle='dropdown' aria-expanded='false'>
                                Kegiatan
                            </a>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                                <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                            </ul>
                        </li>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                data-bs-toggle='dropdown' aria-expanded='false'>
                                Fasilitas
                            </a>
                            <ul class='dropdown-menu'>
                                <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                                <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                                <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                            </ul>
                        </li>
                        <li class='nav-item'>
                        <a href='./hasi.php' class='nav-link teks-bar-nav-color'>Rekap</a>
                    </li>
                        <li class='nav-item'>
                            <a href='./statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                        </li>
                        <li style='float:right'>
                            <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
                ";}
                else if ($nama === 'profadm'){
                    echo "
        <header>
            <nav class='navbar navbar-expand-lg bar-navigasi'>
                <div class='container-fluid'>
                    <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                            class='d-inline-block text-white'>
                        SMK Asyfai'iyah 01 Jakarta
                    </a>
                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                        aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                    </button>
                    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                        <ul class='navbar-nav'>
                        <li class='nav-item'>
                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                            href='./edit_admin.php'>+</a>
                    </li>
                            <li class='nav-item'>
                                <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                    href='../Home_admin.php'>Home</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link teks-bar-nav-color' href='./visi_admin.php'>Visi Misi</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link teks-bar-nav-color menu-aktif' href='./Profil_admin.php'>Profil Guru</a>
                            </li>
                            <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                    Kegiatan
                                </a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                    <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                                    <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                                </ul>
                            </li>
                            <li class='nav-item dropdown'>
                                <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                    Fasilitas
                                </a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                                    <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                                    <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                                </ul>
                            </li>
                            <li class='nav-item'>
                            <a href='./hasi.php' class='nav-link teks-bar-nav-color'>Rekap</a>
                        </li>
                            <li class='nav-item'>
                                <a href='./statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                            </li>
                            <li style='float:right'>
                                <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
                    ";}
                    else if ($nama === 'giatadm'){
                        echo "
            <header>
                <nav class='navbar navbar-expand-lg bar-navigasi'>
                    <div class='container-fluid'>
                        <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                                class='d-inline-block text-white'>
                            SMK Asyfai'iyah 01 Jakarta
                        </a>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                            aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                            <ul class='navbar-nav'>
                            <li class='nav-item'>
                            <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                href='./edit_admin.php'>+</a>
                        </li>
                                <li class='nav-item'>
                                    <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                        href='../Home_admin.php'>Home</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link teks-bar-nav-color' href='./visi_admin.php'>Visi Misi</a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link teks-bar-nav-color' href='./Profil_admin.php'>Profil Guru</a>
                                </li>
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                                        data-bs-toggle='dropdown' aria-expanded='false'>
                                        Kegiatan
                                    </a>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                        <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                                        <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                                    </ul>
                                </li>
                                <li class='nav-item dropdown'>
                                    <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                        data-bs-toggle='dropdown' aria-expanded='false'>
                                        Fasilitas
                                    </a>
                                    <ul class='dropdown-menu'>
                                        <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                                        <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                                        <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                                    </ul>
                                </li>
                                <li class='nav-item'>
                                <a href='./hasi.php' class='nav-link teks-bar-nav-color'>Rekap</a>
                            </li>
                                <li class='nav-item'>
                                    <a href='./statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                                </li>
                                <li style='float:right'>
                                    <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
                        ";}
                                else if ($nama === 'fasiladm'){
                                    echo "
                        <header>
                            <nav class='navbar navbar-expand-lg bar-navigasi'>
                                <div class='container-fluid'>
                                    <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                                            class='d-inline-block text-white'>
                                        SMK Asyfai'iyah 01 Jakarta
                                    </a>
                                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                                        aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                                        <span class='navbar-toggler-icon'></span>
                                    </button>
                                    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                                        <ul class='navbar-nav'>
                                        <li class='nav-item'>
                                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                            href='./edit_admin.php'>+</a>
                                    </li>
                                            <li class='nav-item'>
                                                <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                                    href='../Home_admin.php'>Home</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link teks-bar-nav-color' href='./visi_admin.php'>Visi Misi</a>
                                            </li>
                                            <li class='nav-item'>
                                                <a class='nav-link teks-bar-nav-color' href='./Profil_admin.php'>Profil Guru</a>
                                            </li>
                                            <li class='nav-item dropdown'>
                                                <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                                    Kegiatan
                                                </a>
                                                <ul class='dropdown-menu '>
                                                    <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                                    <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                                                    <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                                                </ul>
                                            </li>
                                            <li class='nav-item dropdown'>
                                                <a class='nav-link dropdown-toggle teks-bar-nav-color menu-aktif' href='#' role='button'
                                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                                    Fasilitas
                                                </a>
                                                <ul class='dropdown-menu'>
                                                    <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                                                    <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                                                    <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                                                </ul>
                                            </li>
                                            <li class='nav-item'>
                                            <a href='./hasi.php' class='nav-link teks-bar-nav-color'>Rekap</a>
                                        </li>
                                            <li class='nav-item'>
                                                <a href='./statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                                            </li>
                                            <li style='float:right'>
                                                <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </header>
                                    ";}
                                        else if ($nama === 'editadm'){
                                                echo "
                                    <header>
                                        <nav class='navbar navbar-expand-lg bar-navigasi'>
                                            <div class='container-fluid'>
                                                <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                                                        class='d-inline-block text-white'>
                                                    SMK Asyfai'iyah 01 Jakarta
                                                </a>
                                                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                                                    aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                                                    <span class='navbar-toggler-icon'></span>
                                                </button>
                                                <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                                                    <ul class='navbar-nav'>
                                                    <li class='nav-item'>
                                                    <a class='nav-link teks-bar-nav-color menu-aktif' aria-current='page'
                                                        href='./edit_admin.php'>+</a>
                                                </li>
                                                        <li class='nav-item'>
                                                            <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                                                href='../Home_admin.php'>Home</a>
                                                        </li>
                                                        <li class='nav-item'>
                                                            <a class='nav-link teks-bar-nav-color' href='./visi_admin.php'>Visi Misi</a>
                                                        </li>
                                                        <li class='nav-item'>
                                                            <a class='nav-link teks-bar-nav-color' href='./Profil_admin.php'>Profil Guru</a>
                                                        </li>
                                                        <li class='nav-item dropdown'>
                                                            <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                                                data-bs-toggle='dropdown' aria-expanded='false'>
                                                                Kegiatan
                                                            </a>
                                                            <ul class='dropdown-menu'>
                                                                <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                                                <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                                                                <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class='nav-item dropdown'>
                                                            <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                                                data-bs-toggle='dropdown' aria-expanded='false'>
                                                                Fasilitas
                                                            </a>
                                                            <ul class='dropdown-menu'>
                                                                <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                                                                <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                                                                <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class='nav-item'>
                                                        <a href='./hasi.php' class='nav-link teks-bar-nav-color'>Rekap</a>
                                                    </li>
                                                        <li class='nav-item'>
                                                            <a href='./statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                                                        </li>
                                                        <li style='float:right'>
                                                            <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>
                                    </header>
                                                ";}
                                                else if ($nama === 'rekap'){
                                                    echo "
                                        <header>
                                            <nav class='navbar navbar-expand-lg bar-navigasi'>
                                                <div class='container-fluid'>
                                                    <a class='navbar-brand teks-bar-nav-color' href='#'><img src='../img/Logo.png' alt='Logo' width='50'
                                                            class='d-inline-block text-white'>
                                                        SMK Asyfai'iyah 01 Jakarta
                                                    </a>
                                                    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown'
                                                        aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
                                                        <span class='navbar-toggler-icon'></span>
                                                    </button>
                                                    <div class='collapse navbar-collapse' id='navbarNavDropdown'>
                                                        <ul class='navbar-nav'>
                                                        <li class='nav-item'>
                                                        <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                                            href='./edit_admin.php'>+</a>
                                                    </li>
                                                            <li class='nav-item'>
                                                                <a class='nav-link teks-bar-nav-color ' aria-current='page'
                                                                    href='../Home_admin.php'>Home</a>
                                                            </li>
                                                            <li class='nav-item'>
                                                                <a class='nav-link teks-bar-nav-color' href='./visi_admin.php'>Visi Misi</a>
                                                            </li>
                                                            <li class='nav-item'>
                                                                <a class='nav-link teks-bar-nav-color' href='./Profil_admin.php'>Profil Guru</a>
                                                            </li>
                                                            <li class='nav-item dropdown'>
                                                                <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                                                    Kegiatan
                                                                </a>
                                                                <ul class='dropdown-menu'>
                                                                    <li><a class='dropdown-item' href='./Ekstra_admin.php'>Ekstrakulikuler</a></li>
                                                                    <li><a class='dropdown-item' href='./Tour_admin.php'>Study Tour</a></li>
                                                                    <li><a class='dropdown-item' href='./LDKS_admin.php'>LDKS</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class='nav-item dropdown'>
                                                                <a class='nav-link dropdown-toggle teks-bar-nav-color' href='#' role='button'
                                                                    data-bs-toggle='dropdown' aria-expanded='false'>
                                                                    Fasilitas
                                                                </a>
                                                                <ul class='dropdown-menu'>
                                                                    <li><a class='dropdown-item' href='./Lab_admin.php'>Ruang Lab</a></li>
                                                                    <li><a class='dropdown-item' href='./Jurusan_admin.php'>Jurusan</a></li>
                                                                    <li><a class='dropdown-item' href='./Ujian_admin.php'>Ujian Berbasis Komputer</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class='nav-item'>
                                                            <a href='./hasi.php' class='nav-link teks-bar-nav-color menu-aktif'>Rekap</a>
                                                        </li>
                                                            <li class='nav-item'>
                                                                <a href='./statistik.php' class='nav-link teks-bar-nav-color'>Statistik Calon Siswa Baru</a>
                                                            </li>
                                                            <li style='float:right'>
                                                                <a class=' nav-item nav-link teks-bar-nav-color' href='../Menu Home.php'>Logout</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav>
                                        </header>
                                                    ";}

    }
?>