<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">
</head>

<body>
  <nav class="navbar navLogin navbar-expand-lg position-fixed w-100 container-fluid">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url() ?>assets/img/relawain logo 1.png" alt="" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-4">
            <a class="nav-link active" aria-current="page" href="<?= base_url() ?>index.php/DashboardKomunitas">Utama</a>
          </li>
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang
            </a>
            <ul class="dropdown-menu navDropdownMenuLink" >
              <li><a id="navDropdownMenuLink" class="dropdown-item  " href="#">Tentang Relawanin</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Visi dan Misi</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Hubungi Kami</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Donasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fitur
            </a>
            <ul class="dropdown-menu navDropdownMenuLink">
              <li><a id="navDropdownMenuLink" class="dropdown-item  " href="<?= base_url() ?>index.php/DaftarKegiatan">Buat Kegiatan</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="<?= base_url() ?>index.php/Kegiatan">Riwayat Kegiatan</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Panduan</a></li>
            </ul>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#">Berita</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="button-container buttonProf" style="margin-right:81px; ">
      <li class="nav-item dropdown" style="list-style-type: none;">
        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <button type="button" style="background:none; border:none">
            <img src="<?= base_url() ?>assets/img/icon profile.png" alt="" style="width: 67px;" />
          </button>
        </a>
        <ul class="dropdown-menu">
          <li><a id="navDropdownMenuLink" class="dropdown-item" href="<?= base_url() ?>index.php/Profile">Profile</a></li>
          <li><a id="navDropdownMenuLink" class="dropdown-item" href="<?= base_url() ?>index.php/Utama">Log Out</a></li>
        </ul>
      </li>
      </a>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>