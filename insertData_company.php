<?php
    require 'connection/connect.php';

    if (isset($_POST['insertbtn_company'])) {
        $company = $_POST['company'];
        $section = $_POST['section'];
        $promotion = $_POST['promotion'];
        $faculty = $_POST['faculty'];
        $former = $_POST['former'];

        $query = "INSERT INTO `tab_company`(`company`, `section`, `promotion`, `faculty`, `former`) VALUES ('$company', '$section', '$promotion', '$faculty', '$former')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo '<script> alert("Données Sauvegarder"); </script>';
            header("location: display_data_trainee.php");
        }
        else {
            echo '<script> alert("Données Non Sauvegarder"); </script>';
        }
    }
