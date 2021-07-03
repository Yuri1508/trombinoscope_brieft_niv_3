<?php
require 'connection/connect.php';
require 'action.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/offcanvas.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Display Data Trainee</title>
</head>

<body>
    <?php include('includes/navbar_canvas.php') ?>

    <div class="card">
        <div class="card-body">
            <a type="button" class="btn btn-primary" href="form_trainee.php">
                Ajouter Utilisateur
            </a>

            <button onClick="imprimer('sectionAimprimer')">Imprimer</button>
        </div>
    </div>

    <div div id='sectionAimprimer' class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="card">
            <div class="card-header">
                <!-- HEADER DES TROMBINOSCOPES -->
                <div class="row block_header" style="justify-content: center;">
                    <div class="col-md-10 header-trombi">
                        <div class="row">
                            <div class="col-md-4" align="center">
                                <img src="images/Logo RSMA.png" alt="logo du RSMA" height="auto" width="180px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <?php
                    $query = "SELECT * FROM tab_trainee";
                    $stmt = $connection->prepare($query);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    ?>

                    <?php while ($row = $result->fetch_assoc()) { ?>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6> <?php echo $row['firstname_trainee']; ?> </h6>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <h6> <?php echo $row['lastname_trainee']; ?> </h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <?php echo '<img src="images/' . $row['image_trainee'] . '" class="card-img-top" alt="Photo" style="width: 150px; height: 155px; float: right;">'; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="nid"> NID : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['nid_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="dn"> DN : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['dn_cps_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="situation"> Situation familiale : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['family_situ_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="birthday"> Date de naissance : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['birthday_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="place_birth"> Lieu de naissance : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['place_birth_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="phone"> Numéro téléphone : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['phone_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="address"> Adresse : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['address_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="diploma"> Diplôme : </label>
                                            </div>

                                            <div class="col-md-6">
                                                <p> <?php echo $row['diploma_trainee']; ?> </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-danger" href="action.php?delete=<?= $row['id_trainee']; ?>">Suprimer</a>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="modal-footer">
                                                    <input type="hidden" name="edit_id" id="edit_id">
                                                    <button type="submit" name="editbtn_Data" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editDataMod"> Modifier </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                            </div>
                            <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/offcanvas.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>