
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include './layouts/extlinks/cdn-css.php'; ?>
    <title>Login</title>
  </head>
  <body>
    <div style="color: red; padding: 20px; font-size: 2rem" class="header">
      BdDoner.com
    </div>
    <div class="wrapper">
      <form class="form-signin" method="post" action="../controller/authadmin.php">
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
        <button name="btn-login" class="btn btn-lg btn-primary btn-block" type="submit">
          Login
        </button>
      </form>
    </div>

    <section>
      <footer class="d-flex justify-content-between p-3
      ">
        <ul class="d-flex">
          <li><a class="pr-3" href="#">About</a></li>
          <li><a class="pr-3" href="#">Sitemap</a></li>
          <li><a class="pr-3" href="#">Contact</a></li>
        </ul>
        <p class="mr-5">&copy; arcadian software system inc.</p>
      </footer>
    </section>
<?php include './layouts/extlinks/cdn-js.php'; ?>
  </body>
</html>
