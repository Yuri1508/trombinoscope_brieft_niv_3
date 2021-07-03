<?php
    require 'connection/connect.php';

    if (isset($_POST['deleteData'])) {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM `tab_trainee` WHERE id_trainee='$id'";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo '<script> alert("Données Suprimer"); </script>';
            header("location: crud_trainee.php");
        }
        else {
            echo '<script> alert("Erreur De Supréssion"); </script>';
        }
    }

?>