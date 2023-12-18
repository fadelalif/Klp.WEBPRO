<!DOCTYPE html>
<html lang="en">

<head>
    <title>Relawanin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleDonasi.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="Donasi" style="position: relative;">
        <div class="container-fluid">
            <div class="row align-items-center" style="margin: 0; padding:120px;">
                <h1 class="headerDash">Donasi</h1>
                <div class="col-md-12 headDash-tagline">
                    <div class="donasi text-center">
                        <i class="fa-solid fa-circle-dollar-to-slot fa-5x"
                            style="color: #00897b; padding-top: 40px;"></i>
                        <p style="padding-top: 30px;">Bantu kami melalui Donasi! <br>setiap donasi yang
                            kalian
                            berikan <br> sangat berarti bagi kami </p>
                        <p style="font-weight: bolder ; color: #00897b; ">Donasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>