<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>
<!-- <?php include '../../controller/hospitalProcess.php'?> -->

<?php
$hid=$_GET['hid'];
$hname=$_GET['hname'];
$hmail=$_GET['hemail'];
$hphone=$_GET['hphone'];
$haddress=$_GET['haddress'];
?>

<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Update Hospital</h1>
    <form method="post" action='../../controller/hospitalProcess.php?hid=<?php echo $hid;?>'>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="hemail" value="<?php echo $hmail; ?>"
                placeholder="Email">
        </div>

        <div class="form-group">
            <label for="hospital_name">Hospital Name</label>
            <input type="text" class="form-control" id="name" name="hname" value="<?php echo $hname; ?>"
                placeholder="Hospital Name">
        </div>



        <div class="form-group">
            <label for="hospital_phone">Hospital Phone</label>
            <input type="text" class="form-control" id="phone" name="hphone" value="<?php echo $hphone; ?>"
                placeholder="+88">
        </div>

        <div class="form-group">
            <label for="hospital_address">Hospital Address</label>
            <input type="txt" class="form-control" id="address" name="haddress" value="<?php echo $haddress; ?>"
                placeholder="Hospital Address">
        </div>

        <div class="d-flex">
            <button type="submit" name="btn-submit" class="btn btn-primary">Update</button>
            <button class="btn-primary btn mx-3"><a style="color:white; text-decoration:none;"
                    href="admindash.php">Back</a></button>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>