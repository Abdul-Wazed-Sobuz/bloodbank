<?php include_once '../../controller/countdonor.php' ?>
<?php include_once '../../controller/counthospital.php' ?>
<?php include_once '../../controller/countbranch.php' ?>
<?php include_once '../../controller/countaccount.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../layouts/extlinks/cdn-css.php'; ?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <title>bdDoner.com | Admin</title>
</head>
<style>
    body {
        margin: 0px;
        background-color: whitesmoke !important;
        color: whitesmoke
    }

    i {
        /* color: #B31B1B; */
        color: honeydew;
    }

    .card-body {
        background-color: #4C5B5C;



    }

    .card,
    .card-body {
        border-radius: 15px;
    }
</style>

<body>
    <?php include '../layouts/admin-nav.php'; ?>
    <div class="container-fluid">
        <div class="row" style="min-height: 560px;">
            <div class="col-2 sidebar">
                <?php include '../layouts/sidebar.php' ?>

                <div class="col-10">
                    <div>
                        <h4 class="p-3" style="color: black;"><i style="color:red" class="fa-solid fa-chart-simple"></i> Current Statistics</h4>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Account</h5>
                                        <div style="display:flex ; justify-content:space-between">
                                            <p class="card-text" style="font-size:larger">Total Count <?php echo $tacc; ?></p>
                                            <div><i style="font-size: 28pt;" class="fa-solid fa-user-large"></i></div>
                                        </div>

                                        <a href="../admin/showallaccount.php" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Donor</h5>
                                        <div style="display:flex ; justify-content:space-between">
                                            <p class="card-text" style="font-size:larger">Total Count <?php echo $tdonor; ?></p>
                                            <div><i style="font-size: 28pt;" class="fa-solid fa-hand-holding-droplet"></i></div>
                                        </div>

                                        <a href="../admin/showalldonor.php" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Hospital</h5>
                                        <div style="display:flex ; justify-content:space-between">
                                            <p class="card-text" style="font-size:larger">Total Count <?php echo $thospital; ?></p>
                                            <div><i style="font-size: 28pt;" class="fa-solid fa-hospital-user"></i></div>
                                        </div>
                                        <a href="../admin/showallhospital.php" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Branch</h5>
                                        <div style="display:flex ; justify-content:space-between">
                                            <p class="card-text" style="font-size:larger">Total Count <?php echo $tbranch; ?></p>
                                            <div><i style="font-size: 28pt;" class="fa-solid fa-code-branch"></i></div>
                                        </div>
                                        <a href="../admin/showallbranch.php" class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        
                        <div class="p-3 my-2">
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                        
                        <script>
                            
                            var xValues = ["AB+", "AB-", "O+", "O-", "A+","B+"];
                            var yValues = [12, 15, 9, 10,10,13,1 ];
                            var barColors = ["#CD4631", "#DEA47E", "#81ADC8", "orange", "#ACACDE","#B8336A"];

                            new Chart("myChart", {
                                type: "bar",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                    }]
                                },
                                options: {
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        text: "Total Blood collection statistics"
                                    }
                                }
                            });
                        </script>
                        </div>
                    </div>

                </div>
                <div>

                </div>
            </div>
        </div>

        <div style="background-color: #353531;" class="container-fluid p-3">
            <div class="row">
                <div class="col-12 w-75">
                    <section>
                        <footer class="d-flex justify-content-between
      ">
                            <ul class="d-flex">
                                <li><a style="color:white" class="pr-3" href="#">About</a></li>
                                <li><a style="color:white" class="pr-3" href="#">Sitemap</a></li>
                                <li><a style="color:white" class="pr-3" href="#">Contact</a></li>
                            </ul>
                            <p style="color:white" class="mr-5">&copy; arcadian software system inc.</p>
                        </footer>
                    </section>
                </div>
            </div>
        </div>

        <?php include '../layouts/extlinks/cdn-js.php'; ?>

</body>

</html>