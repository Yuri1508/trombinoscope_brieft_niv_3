<?php
require 'connection/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/offcanvas.css">
    <link rel="stylesheet" href="assets/css/signin.css">
    <title>Trombinoscope</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <?php include('includes/navbar_canvas.php') ?>
    <div class="container contain">
        <div class="card text-center">
            <main class="form-signin">
                <form action="insertData_company.php" method="post">
                    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Renseignement du Trombinoscope :</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingCompagnie" name="company">
                        <label for="floatingCompagnie">Compagnie</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingSection" name="section">
                        <label for="floatingSection">Section</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPromotion" name="promotion">
                        <label for="floatingPromotion">Promotion</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingFillière" name="faculty">
                        <label for="floatingFillière">Fillière</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingFormateur" name="former">
                        <label for="floatingFormateur">Formateur</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit" name="insertbtn_company">Sauvegarder</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </main>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/offcanvas.js"></script>
</body>

</html>