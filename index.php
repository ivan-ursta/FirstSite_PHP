<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Site 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <header class="col-sm-12 col-md-12 col-lg-12">
                <?php

                ?>
            </header>
        </div>

        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12 m-1">
                <?php
                    include_once('pages/menu.php');
                    include_once('pages/functions.php');
                ?>
            </nav>
        </div>

        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">

                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                    if ($page == 1) include_once('pages/home.php');
                    if ($page == 2) include_once('pages/upload.php');
                    if ($page == 3) include_once('pages/gallery.php');
                    if ($page == 4) include_once('pages/registration.php');
                }
                ?>
            </section>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>