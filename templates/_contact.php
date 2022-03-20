<section class="section contact">

  <div class="row gy-4">

    <div class="col-xl-6" style="width:100% !important">

      <div class="row">
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p><?php echo $_SESSION['User_data']['address']?></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p><?php echo $_SESSION['User_data']['phone']?></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p><?php echo $_SESSION['User_data']['email_address']?></p>
          </div>
        </div>


      </div>

    </div>

    

  </div>

</section>