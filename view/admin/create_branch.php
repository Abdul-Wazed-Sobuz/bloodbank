<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<div class="container my-5">
  <h4 style="padding: 20px, 0px !important">Create Branch</h4>
<form>
  <div class="form-row my-3">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="
    ">
  </div>
  <div class="form-row">

    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="d-flex">
  <button type="submit" class="btn btn-primary">Create</button>
  <a href="admindash.php"><button class="btn btn-primary mx-3">Back</button></a>
  </div>
</form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>