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
  <!-- End Header -->s

  <!-- ======= Sidebar ======= -->
<?php
load_homepage_template("_asidebar");
?>
  <!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Contact</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Pages</li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>
  </nav>
</div>

<?php
load_homepage_template("_contact");
?>


</main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
load_homepage_template("_footer");
?>
  <!-- End Footer -->


  <!-- Vendor JS Files -->
<?php
load_homepage_template("_venders");
?>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>