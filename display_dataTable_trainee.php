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
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/offcanvas.css">
    <title>Display Data Trainee</title>
</head>
<body>
    <?php include('includes/navbar_canvas.php') ?>

    <div class="card" style="padding-top: 80px; padding-bottom: 40px;">
        <div class="card-body">

            <?php
                $query = "SELECT * FROM tab_trainee";
                $query_run = mysqli_query($connection, $query);
            ?>

            <table id="dataTables_id" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th> NOM </th>
                        <th> PRENOM </th>
                        <th> SEXE </th>
                        <th> SITUATION </th>
                        <th> BIRTHDAY </th>
                        <th> PLACE </th>
                        <th> PHONE </th>
                        <th> MAIL </th>
                        <th> COMMUNE </th>
                        <th> ADRESSE </th>
                        <th> DIPLOME </th>
                        <th> NID </th>
                        <th> DN </th>
                        <th> MODIFIER </th>
                        <th> SUPRIMER </th>
                    </tr>
                </thead>

            <?php
                if ($query_run) {
                    foreach($query_run as $row) {
            ?>

                <tbody>
                    <tr>
                        <td><?php echo $row['firstname_trainee']; ?></td>
                        <td><?php echo $row['lastname_trainee']; ?></td>
                        <td><?php echo $row['sexe_trainee']; ?></td>
                        <td><?php echo $row['family_situ_trainee']; ?></td>
                        <td><?php echo $row['birthday_trainee']; ?></td>
                        <td><?php echo $row['place_birth_trainee']; ?></td>
                        <td><?php echo $row['phone_trainee']; ?></td>
                        <td><?php echo $row['mail_trainee']; ?></td>
                        <td><?php echo $row['country_trainee']; ?></td>
                        <td><?php echo $row['address_trainee']; ?></td>
                        <td><?php echo $row['diploma_trainee']; ?></td>
                        <td><?php echo $row['nid_trainee']; ?></td>
                        <td><?php echo $row['dn_cps_trainee']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary updateDataBtn"> MODIFIER </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger deleteDataBtn"> SUPRIMER </button>
                        </td>
                    </tr>
                </tbody>

            <?php
                    }
                }
                else {
                    echo "Aucune Données Trouvé";
                }
            ?>
            </table>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/offcanvas.js"></script>
    
    <script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
</body>
</html>