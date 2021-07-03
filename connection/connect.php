<?php
    $connection = mysqli_connect("127.0.0.1", "root", "");
    $db = mysqli_select_db($connection, 'data_trombi');

    $query = "SELECT * FROM tab_trainee";
    $query_run = mysqli_query($connection, $query);
?>