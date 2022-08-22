<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<?php
$name=$_GET['name'];
$phone=$_GET['phone'];
$address=$_GET['address'];
$bgroup=$_GET['bgroup'];
$dob=date("m/d/Y",strtotime(@$_GET['dob']));
$ld=date("m/d/Y",strtotime(@$_GET['ld']));
?>


<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Update Donor</h1>
    <form method="post" action="../../controller/donor.php">

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Enter donor name">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="+88">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="txt" class="form-control" id="address" name="address" value="<?php echo $address; ?>" placeholder="Donor address">
        </div>

        <div class="form-group">
            <label for="bgroup">Blood Group</label>
            <input type="text" class="form-control" id="bgroup" value="<?php echo $bgroup; ?>" name="bgroup">
        </div>

        <div class="form-row my-3">
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" value="<?php echo $dob; ?>" name="dob">
            </div>

            <div class="form-group col-md-6">
                <label for="ld">Last Donation</label>
                <input type="date" class="form-control" id="ld" value="<?php echo $ld ?>" name="ld">
            </div>
        </div>

        

        <div class="d-flex">
            <button type="submit" class="btn btn-primary" name="save" value="submit">Update</button>
            <button class="btn btn-primary mx-3"><a style="text-decoration: none;color:white" href="admindash.php">Back</a></button>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>