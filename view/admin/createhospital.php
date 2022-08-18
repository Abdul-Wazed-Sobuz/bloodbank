<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Create Hospital</h1>
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
            <label for="hname">Hospital Name</label>
            <input type="name" class="form-control" id="name" placeholder="Hospital Name">
        </div>



        <div class="form-group">
            <label for="phone">Hospital Phone</label>
            <input type="text" class="form-control" id="phone" placeholder="+88">
        </div>

        <div class="form-group">
            <label for="address">Hospital Address</label>
            <input type="txt" class="form-control" id="address" placeholder="Hospital Address">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="admindash.php"><button class="btn btn-primary mx-3">Back</button></a>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>