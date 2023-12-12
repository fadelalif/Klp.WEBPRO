<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">
</head>

<body>
  <nav class="navbar navNotLogin navbar-expand-lg position-fixed w-100">
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
            <a class="nav-link navLink active" aria-current="page" href="<?= base_url() ?>index.php/Utama">Utama</a>
          </li>
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang
            </a>
            <ul class="dropdown-menu navDropdownMenuLink">
              <li><a id="navDropdownMenuLink" class="dropdown-item  " href="<?= base_url() ?>index.php/TentangKami">Tentang Relawanin</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="<?= base_url() ?>index.php/VisiMisi">Visi dan Misi</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="<?= base_url() ?>index.php/HubungiKami">Hubungi Kami</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Donasi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fitur
            </a>
            <ul class="dropdown-menu navDropdownMenuLink">
              <li><a id="navDropdownMenuLink" class="dropdown-item  " href="#">Cari Kegiatan</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Mengadakan Kegiatan</a></li>
              <li><a id="navDropdownMenuLink" class="dropdown-item" href="#">Panduan</a></li>
            </ul>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#">Berita</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="btn-link" style="margin:10px; width: 138px;">
      <a href="<?= base_url() ?>index.php/Login">
        <button type="button" class="btn btn-outline-light btn-lg">Masuk</button>
      </a>
    </div>
    <div class="btn-link">
      <a href="<?= base_url() ?>index.php/Register">
        <button type="button" class="btn btn-outline-light btn-lg">Daftar</button>
      </a>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>