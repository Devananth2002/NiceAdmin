<?php

$signup = false;

if (isset($_POST['first_name']) and isset($_POST['last_name']) and isset($_POST['phone']) and isset($_POST['email_address']) and isset($_POST['password']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $signup = true;
    $result = User::signup($first_name,$last_name,$phone,$email_address,$password);
}

if ($signup)
{
    if ($result)
    {
    ?>
        <main class="container">
            <div class="bg-light p-5 rounded">
              <h1>Signup Success</h1>
              <p class="lead">Successfully signed --> Click below to login</p>
              <a class="btn btn-lg btn-primary" href="pages-login.php" role="button">Click here&raquo;</a>
            </div>
        </main>
    <?php 
    }
}

else
{
?>

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
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="pages-register.php" method="post">
                    <div class="col-12">
                      <label for="yourName" class="form-label">First Name</label>
                      <input type="text" name="first_name" class="form-control" id="first_name" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Last Name</label>
                      <input type="text" name="last_name" class="form-control" id="last_name" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email_address" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Phone</label>
                      <div class="input-group has-validation">
                        <input type="phone" name="phone" class="form-control" id="phone" required>
                        <div class="invalid-feedback">Plese enter the mobile number.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
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
    
<?php 
}