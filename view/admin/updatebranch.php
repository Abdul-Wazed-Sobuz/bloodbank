<?php include '../layouts/extlinks/cdn-css.php'; ?>
<?php include '../layouts/admin-nav.php' ?>
<!-- <?php include '../../controller/branchProcess.php'?> -->
<?php
$bid=$_GET['bid'];
$bmail=$_GET['bemail'];
$badd=$_GET['badd'];
$bphone=$_GET['bphon'];
$zip=$_GET['zip'];

// echo $bid;
?>

<div class="container my-5">
  <h4 style="padding: 20px, 0px !important">Update Branch Details</h4>
<form method="post" action='../../controller/branchProcess.php?bid=<?php echo $bid;?>'>
  <div class="form-row my-3">
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="bemail" id="inputEmail4" value="<?php echo $bmail; ?>" placeholder="Email">
    </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div> -->
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="baddress" value="<?php echo $badd?>" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="number" value="<?php echo $bphone?>" name="bphone" class="form-control" id="inputAddress2" placeholder="
    ">
  </div>
  <div class="form-row">

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" name="bzip" value="<?php echo $zip?>" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="d-flex">
  <button type="submit"  name="btn-submit" class="btn btn-primary">Update</button>
  <button class="btn-primary btn mx-3"><a style="color:white; text-decoration:none;" href="admindash.php">Back</a></button>
  </div>
</form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>