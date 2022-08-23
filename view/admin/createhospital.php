<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Create Hospital</h1>
    <form method="post" action="../../controller/createHospitalProcedure.php">

        <div class="form-row my-3">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="hospital_name">Hospital Name</label>
            <input type="text" class="form-control" id="name" name="hospital_name" placeholder="Hospital Name">
        </div>



        <div class="form-group">
            <label for="hospital_phone">Hospital Phone</label>
            <input type="text" class="form-control" id="phone" name="hospital_phone" placeholder="+88">
        </div>

        <div class="form-group">
            <label for="hospital_address">Hospital Address</label>
            <input type="txt" class="form-control" id="address" name="hospital_address" placeholder="Hospital Address">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary" name="save" value="submit">Create</button>
            <button class="btn btn-primary mx-3"><a style="text-decoration: none;color:white" href="admindash.php">Back</a></button>
        </div>
    </form>
</div>

<div>
  <?php include '../layouts/footer.php' ?>
</div>



<?php include '../layouts/extlinks/cdn-js.php'; ?>