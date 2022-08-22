<?php include '../layouts/extlinks/cdn-css.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Search Blood</title>
</head>

<body>
    <?php include '../layouts/admin-nav.php'; ?>
    <div class="container-fluid">
        <div class="row" style="min-height: 550px;">
            <div class="col-2">
                <?php include '../layouts/sidebar.php' ?>
                <div class="col-10">
                    <nav class="navbar navbar-light bg-light justify-content-between p-3 my-3">
                        <a class="navbar-brand"><h4 style="color:red"><i style="font-size: 16pt;margin-right:10px" class="fa-solid fa-magnifying-glass"></i>Search Blood</h4></a>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </nav>
                    <!-- <h4 style="background-color: red;color:white" class="p-3 my-3"><i style="font-size: 16pt;margin-right:10px" class="fa-solid fa-magnifying-glass"></i>Search Blood</h4>
                    <form action="" method="post"> -->

                    </form>

                </div>
            </div>
        </div>
        <div>
            <?php include '../layouts/footer.php' ?>
        </div>
        <?php include '../layouts/extlinks/cdn-js.php'; ?>

</body>

</html>