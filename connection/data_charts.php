<?php
    //Connexion Base de donnée
    require 'connect.php';

    //Requête
    $query = "SELECT `country_trainee` FROM `tab_trainee` WHERE 1";
    $query_run = mysqli_query($connection, $query);

    //Boucle pour chaques résultats
    $data = array();
    foreach ($query_run as $row) {
        $data[] = $row;
    }

    //Affichage du résultat
    print json_encode($data);
?>