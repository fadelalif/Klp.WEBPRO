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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleHubungiKami.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="headDash" style="position: relative;">
        <div class="container-fluid">
            <div class="row align-items-center" style="margin: 0; padding:120px;">
                <h1 class="headerDash">Hubungi Kami</h1>
                <div class="col-md-6 headDash-tagline" style="background-color:#DADADA;">
                    <div class="input-group mb-4" style="max-width: 568px; padding-top: 10px;">
                        <input type="text" class="form-control" placeholder="Nama" aria-label="Nama"
                            aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-4" style="max-width: 568px">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Email"
                            aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-4" style="max-width: 568px">
                        <input type="text" class="form-control" placeholder="Subjek Pesan" aria-label="Subjek"
                            aria-describedby="basic-addon1" />
                    </div>
                    <div class="input-group mb-4" style="max-width: 568px">
                        <textarea type="text" class="form-control" rows="5" placeholder="Isi pesan..." aria-label="Isi"
                            aria-describedby="basic-addon1"></textarea>
                    </div>
                    <div class="mt-4" style="text-align: left; padding:10px;">
                            <a href="#" class="btn Kirim">Kirim</a>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>