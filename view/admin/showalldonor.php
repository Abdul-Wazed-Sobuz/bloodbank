<?php include '../layouts/extlinks/cdn-css.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Donor List</title>
</head>

<body>
    <?php include '../layouts/admin-nav.php'; ?>
    <div class="container-fluid">
        <div class="row" style="min-height: 1000px;">
            <div class="col-2">
                <?php include '../layouts/sidebar.php' ?>
                <div class="col-10">

                    <h4>Donor List</h4>
                    <?php include '../../controller/showdonorController.php' ?>
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