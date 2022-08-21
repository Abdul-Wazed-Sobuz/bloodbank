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
    <title>bdDoner.com | Admin</title>
</head>
<style>
    body {
        margin: 0px;
        background-color: whitesmoke !important;
    }

    i {
        color: #F40009;
    }

    .card-body {
        background-color: #FEBE10;
        
        
        

    }
    .card, .card-body{
        border-radius: 15px;
    }
</style>

<body>
    <?php include '../layouts/admin-nav.php'; ?>
    <div class="container-fluid">
        <div class="row" style="min-height: 1000px;">
            <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../admin/create_branch.php">Create Branch</a>
                        <a class="dropdown-item" href="../admin/createhospital.php">Create Hospital</a>
                        <a class="dropdown-item" href="../admin/createDonor.php">Create Donor</a>
                    </div>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Show data</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Requests</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Profile</a>
                </div>
            </div>

            <div class="col-10">
                <div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Account</h5>
                                    <div style="display:flex ; justify-content:space-between">
                                        <p class="card-text" style="font-size:larger">Total Count <?php echo $tacc; ?></p>
                                        <div><i style="font-size: 28pt;" class="fa-solid fa-user-large"></i></div>
                                    </div>

                                    <a href="#" class="btn btn-dark">View</a>
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

                                    <a href="#" class="btn btn-dark">View</a>
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
                                    <a href="#" class="btn btn-dark">View</a>
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
                                    <a href="#" class="btn btn-dark">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Donor List</h4>
                <?php include '../../controller/showdonorController.php' ?>
                <h4>Branch List</h4>
                <?php include '../../controller/showallbranchController.php' ?>
                <h4>Hospital List</h4>
                <?php include '../../controller/showallhospitalController.php' ?>
            </div>
        </div>
    </div>
    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-12">
                <section>
                    <footer class="d-flex justify-content-between
      ">
                        <ul class="d-flex">
                            <li><a class="pr-3" href="#">About</a></li>
                            <li><a class="pr-3" href="#">Sitemap</a></li>
                            <li><a class="pr-3" href="#">Contact</a></li>
                        </ul>
                        <p class="mr-5">&copy; arcadian software system inc.</p>
                    </footer>
                </section>
            </div>
        </div>
    </div>
    <?php include '../layouts/extlinks/cdn-js.php'; ?>

</body>

</html>