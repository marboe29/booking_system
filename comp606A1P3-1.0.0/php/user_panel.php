<!-- Header -->
<?php 
require_once "includes/header.inc.php";
require_once "includes/session.inc.php"
    
?>

<div class="container-fluid bg-user w-100 vh-100 d-flex flex-column align-center justify-content-center">
<div class="container user-card bg-light d-flex flex-column align-center justify-content-between p-5">
    <div>
        <!-- WELCOME "USER" -->
        <h1>Welcome <?php echo ($_SESSION['nameFirst']);?></span></h1>
        <p class="lead mt-3">Manage your bookings</p>  
        <hr class="my-4">
    </div>

  <div>
  <div class="">
  <a class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="reserve_booking.php" role="button">Book Appointments</a>
  <a class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="user_manage.php" role="button">Manage Bookings</a>
  </div>

  <div>

  <a class="btn btn-lg btn-outline-primary btn-block btn-login text-uppercase font-weight-bold mb-2" href="user_logout.php" role="button">Logout</a>

  </div>

  </div>



</div>



    </div>





</div>