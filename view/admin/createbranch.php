
<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container my-5" style="min-height: 450px;">
  <h4 style="padding: 20px, 0px !important">Create Branch</h4>
<form method="post" action="../../controller/createBranchProcedure.php">
  <div class="form-row my-3">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="branch_address" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="number" class="form-control" id="inputAddress2" name="branch_phone" placeholder="
    ">
  </div>
  <div class="form-row">

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip">
    </div>
  </div>
  <div class="d-flex">
  <button type="submit" class="btn btn-primary" name="save" value="submit">Create</button>
  <button class="btn-primary btn mx-3"><a style="color:white; text-decoration:none;" href="admindash.php">Back</a></button>
  </div>
</form>
</div>
<div>
  <?php include '../layouts/footer.php' ?>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>