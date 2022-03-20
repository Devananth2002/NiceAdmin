<?php 
include "libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
load_homepage_template("_head");
?>

<body>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4"> 
                <img src="assets/img/logo.png" alt="" style="height: 45px; margin-right: 15px;">
                <h1 style="font-size: xxx-large;"><span class="d-none d-lg-block" >NiceAdmin</span></h1>
              </div>
              <div>
                <p>Security that Matters</p>
              </div>
            <div class="buttons">
                <div class="button1">
                    <a href="pages-login.php"><button type="button" class="btn btn-success" href="login.php" >Login</button></a>
                </div>
                <div class="button2">
                    <a href="pages-register.php"><button type="button" class="btn btn-info" >Signup</button></a>
                </div>
            </div>



            </div>
          </div>
        </div>

      </section>

    </div>
  </main>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?php
load_homepage_template("_venders");
?>

  <script src="assets/js/main.js"></script>

</body>

</html>