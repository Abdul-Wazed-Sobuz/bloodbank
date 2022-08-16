<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../layouts/extlinks/cdn-css.php' ?>
    <title>bdDoner.com | Admin</title>
</head>
<style>
    body {
        background-color: whitesmoke !important;
    }
</style>

<body>
    <?php include '../layouts/admin-nav.php'; ?>

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Create Users
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Create Branch</a>
                        <a class="dropdown-item" href="#">Create Hospital</a>
                        <a class="dropdown-item" href="#">Create Doner</a>
                    </div>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Show data</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Requests</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Profile</a>
                </div>
            </div>

            <div class="col-10">
                <p style="border:2px solid black; min-height:480px;">Database connected</p>
            </div>


        </div>
    </div>




    <?php include '../layouts/extlinks/cdn-js.php'; ?>
</body>

</html>