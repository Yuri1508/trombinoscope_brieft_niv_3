<?php
    require 'connection/connect.php';
    require 'insertData.php';

    
    if (isset($_POST['insertData'])) {
        $msg = "";

        $target = "images/".basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Success";
            // header("location: display_data_trainee.php");
        }
        else {
            $msg = "Problem";
        }



        $image = $_FILES['image']['name'];
        $faculty = $_POST['select_faculty'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $sexe = $_POST['sexe'];
        $situation = $_POST['situation'];
        $birthday = $_POST['birthday'];
        $birthday_place = $_POST['birthday_place'];
        $phone = $_POST['phone'];
        $mail = $_POST['email'];
        $country = $_POST['country'];
        $address = $_POST['address'];
        $diploma = $_POST['diploma'];
        $nid = $_POST['nid'];
        $dn = $_POST['dn'];

        insertData($image,$faculty,$firstName,$lastName,$sexe,$situation,$birthday,$birthday_place,$phone,$mail,$country,$address,$diploma,$nid,$dn);
        
    }

    $faculty = $_GET['faculty_id'];

    $query = "SELECT * FROM `faculty`";
    $t_faculty = $connection->query($query); 

    $query = "SELECT * FROM `tab_trainee` as tt LEFT JOIN faculty as fa on tt.faculty_id = fa.id LEFT JOIN section as se on fa.section_id = se.id LEFT JOIN company as co on se.company_id = co.id WHERE faculty_id =".$faculty;

    $t_faculty_trainee = $connection->query($query); 

    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/offcanvas.css">
    <title>Trombinoscope</title>

    <style>
        .container {
            max-width: 960px;
        }

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

    <div class="container-fluid" style="padding-top: 80px; padding-bottom: 40px;">
        <div class="row">
            <div class="col-md-12 p-2 text-center">
                <h2>Renseignement du stagiaire :</h2><hr>
            </div>
            <div class="col-md-6">
                <form id="addTrainee" class="needs-validation"  method="POST" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="image" class="form-label">Photo :</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="image" class="form-label">Fillière</label>
                            <select name="select_faculty" >
                                <?php 
                                    
                                    while ($row = mysqli_fetch_object($t_faculty)) {
                                        
                                        print '<option value="'.$row->id.'">'.$row->faculty_name.'</option>';
                                    
                                    }
                                    
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-3">
                            <label for="firstName" class="form-label">Nom :</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nom de famille" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="lastName" class="form-label">Prénom :</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Prénom" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="sexe" class="form-label">Sexe :</label>
                            <input type="text" class="form-control" id="sexe" name="sexe" placeholder="Sexe" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="situation" class="form-label">Situation Familiale :</label>
                            <input type="text" class="form-control" id="situation" name="situation" placeholder="Situation Familiale" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="birthday" class="form-label">Date et Lieu de naissance :</label>
                        <div class="input-group has-validation">
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date de naissance" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                            <input type="text" class="form-control" id="birthday_place" name="birthday_place" placeholder="Lieu de Naissance" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Téléphone :</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Numéro de Téléphone" required>
                            <div class="invalid-feedback">
                                Ce champ est requis !
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">Adresse Mail :<span class="text-muted">(Optional)</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                            <div class="invalid-feedback">
                                Entrer un mail valid !
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="country" class="form-label">Commune :</label>
                            <input type="text" class="form-control" id="country" name="country" required>
                            <div class="invalid-feedback">
                                Entrer une commune valid !
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="address" class="form-label">Adresse complète :</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                            <div class="invalid-feedback">
                                Entrer une adresse valid !
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="diploma" class="form-label">Diplôme :</label>
                        <input type="text" class="form-control" id="diploma" name="diploma">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="nid" class="form-label">Numéro Identifiant Défense  :</label>
                            <input type="text" class="form-control" id="nid" name="nid" required>
                        </div>

                        <div class="col-md-6">
                            <label for="dn" class="form-label">Numéro DN :</label>
                            <input type="text" class="form-control" id="dn" name="dn" required>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" name="insertData" class="btn btn-primary"> Sauvegarder </button>
                        </div>

                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"> Anuler </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-6">

            <table id="dataTables_id" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th> NOM </th>
                        <th> PRENOM </th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                                    
                        while ($row = mysqli_fetch_object($t_faculty_trainee)) {
                            
                            print '<tr>';
                            print '<td>'.$row->firstname_trainee.'</td>';
                            print '<td>'.$row->lastname_trainee.'</td>';
                            print '</tr>';
                        
                        }
                        
                    ?>
                </tbody>

            </div>

            <!-- <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <label for="company" class="form-label">Compagnie :</label>
                        <input type="text" class="form-control" name="company" placeholder="Compagnie" required>
                        <div class="invalid-feedback">
                            Ce champ est requis !
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="fill" class="form-label">Fillière :</label>
                        <input type="text" class="form-control" name="fillière" placeholder="Fillière" required>
                        <div class="invalid-feedback">
                            Ce champ est requis !
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="section" class="form-label">Section :</label>
                        <input type="text" class="form-control" name="section" placeholder="Section" required>
                        <div class="invalid-feedback">
                            Ce champ est requis !
                        </div>
                    </div>
                </div>

                
            </div> -->
        </div>
    </div>


    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/offcanvas.js"></script>
</body>

</html>