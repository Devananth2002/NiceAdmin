<?php

$signup = false;

if(isset($_POST['email_address']) and isset($_POST['password']))
{
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $signup = true;
    $result = User::loign($email_address,$password);
}

if ($signup)
{
    if ($result)
    {
      header("location:http://localhost/NiceAdmin/users-profile.php");
      exit();  
    }
    else
    {
    ?>
      <main class="container">
          <div class="bg-light p-5 rounded">
            <h1>Login Failed</h1>
            <p class="lead">You Enter the wrong mail id or password Click below to login in again</p>
            <a class="btn btn-lg btn-primary" href="pages-login.php" role="button">Click here&raquo;</a>
          </div>
      </main>
    <?php 
    }
}
else
{ ?>


<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Please Login</h5>
                  </div>

                  <form class="row g-3 needs-validation" action="pages-login.php" method="post">

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email_address" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have an account? <a href="pages-register.php">signup</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>



<?php }