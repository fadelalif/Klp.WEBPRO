<head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styleNav.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg position-fixed w-100 container-fluid">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?=base_url()?>assets/img/relawain logo 1.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-4">
              <a class="nav-link active" aria-current="page" href="#">Utama</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Tentang</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Fitur</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#">Berita</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="button-container buttonProf" style="margin-right:81px; ">
        <a href="<?=base_url()?>index.php/Dashboard">
          <button type="button" style="background:none; border:none">
            <img src="<?=base_url()?>assets/img/icon profile.png" alt="" style="width: 67px;" />
          </button>
        </a>
      </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>