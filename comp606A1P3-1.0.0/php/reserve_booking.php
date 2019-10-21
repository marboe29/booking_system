<!-- Header -->
<?php
require_once "includes/header.inc.php";
require_once "includes/session.inc.php"
?>



<div class="container-fluid bg-user w-100 vh-100 d-flex flex-column align-center justify-content-center">
<div class="container user-card bg-light d-flex flex-column align-center justify-content-between p-5">

        <h5>Book your Appointment</h5>
        <hr class="my-4">


  <div class="container-form">
        <form id="res_form" onsubmit="return res.save()">
      
           <label for="res_tel"><strong>Telephone Number</strong></label>
             <input type="text" required id="res_tel"/>
              <label for="res_notes"><strong>Notes (if any)</strong></label>
             <input type="text" id="res_notes"/>
            <label><strong>Booking Date</strong></label>
            <br>
           <div id="res_date" class="calendar"></div>
          <label><strong>Booking Slot</strong></label><br>
        <div id="res_slot"></div>
        <label><strong>Massage Type</strong></label><br>
        <div id="res_type"></div>
      <button id="res_go" disabled> Submit </button>
    </form>
    </div>

  


    <div class="container mt-5">
      <hr>
      <div class="row">
    <a class="btn btn-lg btn-outline-primary btn-login text-uppercase font-weight-bold mb-2 pr-2" href="user_manage.php">Manage Bookings</a>
  <a class="btn btn-lg btn-outline-primary  btn-login text-uppercase font-weight-bold mb-2" href="user_panel.php">Cancel</a>
  </div>  
</div>  
</div>









  </div>
  </div>

  <?php include_once "includes/footer.inc.php" ?>

  