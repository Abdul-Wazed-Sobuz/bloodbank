<?php include '../layouts/extlinks/cdn-css.php' ?>

<?php include '../layouts/admin-nav.php'; ?>

<div class="container my-5">
    <h1 style="padding: 20px, 0px !important">Create Donor</h1>
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
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" placeholder="Enter donor name">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" placeholder="+88">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="txt" class="form-control" id="address" placeholder="Donor address">
        </div>

        <div class="form-row my-3">
            <div class="form-group col-md-6">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob">
            </div>

            <div class="form-group col-md-6">
                <label for="ld">Last Donation</label>
                <input type="date" class="form-control" id="ld">
            </div>
        </div>

        <div class="form-group">
            <label for="bgroup">Blood Group</label>
            <input type="text" class="form-control" id="bgroup">
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-primary">Create</button>
            <a href="admindash.php"><button class="btn btn-primary mx-3">Back</button></a>
        </div>
    </form>
</div>





<?php include '../layouts/extlinks/cdn-js.php'; ?>