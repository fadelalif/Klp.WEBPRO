<!DOCTYPE html>
<html lang="en">

<head>
  <title>Relawanin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCariKegiatan.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleCardKegiatan.css">
</head>

<body>
  <div>
    <?php include 'application/views/navLogin.php'; ?>
  </div>
  <!-- HEADER  -->
  

  <!-- CARD KEGIATAN -->
  <section id="cardKegiatan" style="position: relative;padding-top: 75px;">
    <div class="container-fluid" style="background-color: #DADADA">
      <div class="row" style="padding-top:20px;">
        <div class="col-md-8">
            <h1 style="padding-left:10px;">Cari Kegiatan</h1>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2" style="padding-right:25px;">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
        </div>
        <div class="col-md-8" style="padding-left: 25px;">
            <h5>
                Kami telah menyediakan banyak kegiatan yang bisa kamu ikuti
            </h5>
        </div>
        <div class="col-md-4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="padding:0px 15px 0px 0px;">
                <button id="btnFilter"class="btn btn-small" data-toggle="portfilter" data-target="filter">Filter</button>
                <button id="btnFilter" class="btn btn-small" data-toggle="portfilter" data-target="urutkan">Urutkan</button>
            </div>
        </div>
      <div class="row row-cols-1 row-cols-md-3 g-3" style="padding: 10px;">
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
        <?php include 'application/views/cardKegiatan.php'; ?>
      </div>
    </div>
  </section>
  <section id="cardKegiatan">
    <div class="container-fluid" style="background-color: #DADADA">
      <div class="row" style="padding: 25px;">
      <div class="col-md-12"></div>
      </div>
    </div>
  <!--Footer -->
  <?php include 'application/views/footer.php'; ?>
  <!--Footer -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>