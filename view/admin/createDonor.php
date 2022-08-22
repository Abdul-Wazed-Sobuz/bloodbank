<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Create Donor</h1>
    <form method="post" action="../../controller/donor.php">

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
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter donor name">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="+88">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="txt" class="form-control" id="address" name="address" placeholder="Donor address">
        </div>

        <div class="form-row my-3">
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>

            <div class="form-group col-md-6">
                <label for="ld">Last Donation</label>
                <input type="date" class="form-control" id="ld" name="ld">
            </div>
        </div>

        <div class="form-group">
            <label for="bgroup">Blood Group</label>
            <input type="text" class="form-control" id="bgroup" name="bgroup">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary" name="save" value="submit">Create</button>
            <button class="btn btn-primary mx-3"><a style="text-decoration: none;color:white" href="admindash.php">Back</a></button>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>