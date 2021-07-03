<?php
    require 'connection/connect.php';


    $query = "SELECT * FROM `faculty`";
    $t_faculty = $connection->query($query); 
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/offcanvas.css">
    <title>Home Trombinoscope</title>
</head>

<body>
    <?php include('includes/navbar_canvas.php') ?>
    <div class="container">
        
            <?php 
                                            
                while ($row = mysqli_fetch_object($t_faculty)) {
                    
                    print '<a href="display_data_trainee.php?id_faculty='.$row->id.'">'.$row->faculty_name.'</a>';
                    print '<br>';
                }
                
            ?>
        
        </div>
    <div class="container" style="padding-top: 80px; padding-bottom: 40px;">
        <div class="jumbotron">
            <section class="border  d-flex justify-content-center">
                <div class="col-lg-7">
                    <canvas id="myChart" width="200px" height="200px"></canvas>
                </div>
            </section>
        </div>
    </div>

    <script src="assets/js/chart.js" type="text/javascript"></script>
    <script type="text/javascript">
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['2016', '2017', '2018', '2019', '2020', '2021'],
                datasets: [{
                    label: 'Punaauia',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script type="text/javascript" src="assets/js/offcanvas.js"></script>
</body>

</html>