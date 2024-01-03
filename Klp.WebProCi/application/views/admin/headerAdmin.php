<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styleNav.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styleFooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <style>
        /* Sidebar */
        #sidebar {
            background-color: white;
            height: 100vh;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            z-index: 1;
            
        }

        #sidebar .nav-link {
            color: rgba(171, 171, 171, 1);
        }

        #sidebar .nav-link:hover {
            background-color: #f8f9fa;
            color: #00897B;
        }

        #sidebar .nav-link.active {
            background-color: #f8f9fa;
            color: #00897B;
        }

        .submenu {
            display: none;
            padding-left: 20px;
        }

        #sidebar .active {
            background-color: #555;
        }

        main {
            padding-top: 20px;
            margin-left: 260px;
        }

        body {
            background-color: rgba(240, 255, 243, 1);
        }
        

        /* Kotak table */
        .container {
            margin-top: 50px;
            margin-left: 230px;
            /* overflow: auto; */
            max-height: 600px;
            padding-bottom:50px;
        }

        .inner-container {
            border: 1px solid #ddd;
            box-shadow;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom:100px;
            background-color: white;
            width:100%;
            padding-bottom:50px;
            margin-bottom:50px;
        }

        .table-container {
            width: 100%;
            padding-bottom:50px;
        }

        .table {
            width: 100%;
            padding-top:20px;
        }

        /* Nav */
        nav.navbar {
            background-color: #00897B;
        }

        nav.navbar a {
            color: white;
        }

        nav.navbar a:hover {
            color: #ffcc00;
        }
        /* button */
        .buttonDel{
            padding: 5px 10px;
            background-color:red;
            border: 2px solid red;
            color:white;
            border-radius: 5px;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;

        }
        .buttonDel:hover{
            padding: 5px 10px;
            border: 2px solid red;
            background-color:transparent;
            border-radius: 5px;
            color:red;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;
        }

        .button{
            padding: 5px 10px;
            background-color:#00897B;
            border: 2px solid #00897B;
            color:white;
            border-radius: 5px;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;

        }
        .button:hover{
            padding: 5px 10px;
            border: 2px solid #00897B;
            background-color:transparent;
            border-radius: 5px;
            color:#00897B;
            cursor: pointer;
            padding-left:20px;
            padding-right:20px;
        }

        

    </style>
</head>

<body>