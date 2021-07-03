<?php
    require 'connection/connect.php';

    if (isset($_POST['editbtn_Data'])) {
        $id = $_POST['edit_id'];

        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $mail = $_POST['mail'];
        $contact = $_POST['contact'];

        $query = "UPDATE tab_trainee SET firstname_trainee='$lastname',`lastname_trainee`=[value-4],`sexe_trainee`=[value-5],`birthday_trainee`=[value-6],`place_birth_trainee`=[value-7],`phone_trainee`=[value-8],`mail_trainee`=[value-9],`country_trainee`=[value-10],`address_trainee`=[value-11],`family_situ_trainee`=[value-12],`diploma_trainee`=[value-13],`nid_trainee`=[value-14],`dn_cps_trainee`=[value-15],`faculty_id`=[value-16] WHERE 1";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo '<script> alert("Les Données Ont Eté Modifier ") </script>';
            header("location: admin.php");
        }

        else {
            echo '<script> alert("Erreur De Modification") </script>';
        }
    }
?>