<?php
    require 'connection/connect.php';

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];

        $query = "DELETE FROM tab_trainee WHERE id_trainee=?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        header("location: crud_trainee.php");
    }
?>