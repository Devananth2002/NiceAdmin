<?php 
include "libs/load.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php 
  load_homepage_template("_head");
?>

<body>

  <!-- ======= Header ======= -->
<?php 
  load_homepage_template("_header");
?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
<?php
load_homepage_template("_asidebar");
?>
  <!-- End Sidebar-->
<?php
load_homepage_template("_users_profile");
?>

  <!-- End #main -->

  <!-- ======= Footer ======= -->
<?php 
load_homepage_template("_footer");
?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
<?php 
load_homepage_template("_venders");
?>>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>