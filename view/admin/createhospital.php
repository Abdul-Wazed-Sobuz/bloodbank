<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Create Hospital</h1>
    <form method="post" action="../../controller/hospitalProcess.php">

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
            <button class="btn-primary btn mx-3"><a style="color:white; text-decoration:none;" href="admindash.php">Back</a></button>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>