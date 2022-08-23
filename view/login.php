
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php include './layouts/extlinks/cdn-css.php'; ?>
    <style>
      body{
       background-image: url('images/bg.jpg');
       /* background-size: cover; */
       /* background-repeat: no-repeat; */
       background-color: black;
      }
    </style>
    <title>Login</title>
  </head>
  <body>
    <div style="color: red; padding: 20px; font-size: 1.5rem" class="header">
    <i style="padding:0px 5px ;color:red" class="fa-solid fa-droplet"></i>BdDoner.com
    </div>
    <div class="wrapper">
      <form class="form-signin" method="post" action="../controller/authadminController.php">
        <h2
          style="margin-bottom: 1rem; padding: 10px, 0px, 15px, 0px"
          class="form-signin-heading"
        >
          Admin Login
        </h2>
        <input
          type="email"
          class="form-control"
          name="email"
          placeholder="Email Address"
    
          autofocus=""
        />
        <br />

        <input
          type="password"
          class="form-control"
          name="password"
          placeholder="Password"

        />
        <br />
        <label class="checkbox">
          <input
            type="checkbox"
            value="remember-me"
            id="rememberMe"
            name="rememberMe"
          />
          Remember me
        </label>
        <button style="background-color: red;font-weight:600;" name="btn-login" class="btn btn-lg btn-primary btn-block" type="submit">
          Login
        </button>
      </form>
    </div>
    <?php include './layouts/footer.php' ?>

    
<?php include './layouts/extlinks/cdn-js.php'; ?>
  </body>
</html>
