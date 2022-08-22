<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<?php
$hname=$_GET['hname'];
$hemail=$_GET['hemail'];
$hphone=$_GET['hphone'];
$haddress=$_GET['haddress'];
?>

<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Update Hospital</h1>
    <form method="post" action="../../controller/hospitalController.php">

        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $hemail; ?>" placeholder="Email">
            </div>
            
        <div class="form-group">
            <label for="hospital_name">Hospital Name</label>
            <input type="text" class="form-control" id="name" name="hospital_name" value="<?php echo $hname; ?>" placeholder="Hospital Name">
        </div>



        <div class="form-group">
            <label for="hospital_phone">Hospital Phone</label>
            <input type="text" class="form-control" id="phone" name="hospital_phone" value="<?php echo $hphone; ?>" placeholder="+88">
        </div>

        <div class="form-group">
            <label for="hospital_address">Hospital Address</label>
            <input type="txt" class="form-control" id="address" name="hospital_address" value="<?php echo $haddress; ?>" placeholder="Hospital Address">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary" name="save" value="submit">Update</button>
            <button class="btn btn-primary mx-3"><a style="text-decoration: none;color:white" href="admindash.php">Back</a></button>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>