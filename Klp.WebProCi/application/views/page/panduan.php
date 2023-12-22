<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panduan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylePanduan.css">
</head>

<body>
    <div>
        <?php include 'application/views/navLogin.php'; ?>
    </div>
    <section id="headDash" style="position: relative;padding-top: 90px;">
        <div class="container-fluid">
            <div class="row align-items-center" >
                <div class="col-md-12 headDash-tagline text-center" style="margin: 0; padding: 0;">
                    <h1 class="headerDash">Panduan</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="descPanduan" style="position: relative;">
        <div class="container-fluid align-items-center">
            <div class="row">
                <div class="col-md-12 headDash-tagline text-center"
                    style="margin-bottom: 74px; margin-top:64px; padding: 0;">

                </div>
            </div>
        </div>
    </section>
    <?php include 'application/views/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>