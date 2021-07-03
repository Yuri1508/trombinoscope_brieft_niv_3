<?php


    require 'connection/connect.php';

    function insertData($image,$faculty,$firstName,$lastName,$sexe,$situation,$birthday,$birthday_place,$phone,$mail,$country,$address,$diploma,$nid,$dn){
        global $connection;




        $query = "INSERT INTO `tab_trainee`(`image_trainee`,`faculty_id`, `firstname_trainee`, `lastname_trainee`, `sexe_trainee`, `family_situ_trainee`,  `birthday_trainee`, `place_birth_trainee`, `phone_trainee`, `mail_trainee`, `country_trainee`, `address_trainee`, `diploma_trainee`, `nid_trainee`, `dn_cps_trainee`)"; 
        $query.= " VALUES ";
        $query.= " ('$image','$faculty', '$firstName', '$lastName', '$sexe', '$situation', '$birthday', '$birthday_place', '$phone', '$mail', '$country', '$address', '$diploma', '$nid', '$dn')";
        

        mysqli_query($connection, $query);

    }
?>