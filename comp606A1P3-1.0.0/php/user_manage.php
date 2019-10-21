<!-- Header -->
<?php 
require_once "includes/header.inc.php";
require_once "includes/session.inc.php";
    
?>

<div class="container-fluid bg-user w-100 vh-100 d-flex flex-column align-center justify-content-center">
<div class="container user-card bg-light d-flex flex-column align-center p-5">
    <div>
    <a class="btn btn-lg btn-outline-primary btn-login text-uppercase font-weight-bold mb-2" href="user_panel.php" role="button">Back</a>
        <p class="lead mt-3">Manage your bookings</p>  
        <hr class="my-4">
        <link rel="stylesheet" href="public/style.css">
 

    </div>

<style>

  #cancel{
    margin-top: auto;
  }

</style>

  <div>
  <div class="">
  <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="bg-secondary text-white"> Date</th>
                        <th scope="col" class="bg-secondary text-white">Massage</th>
                        <th scope="col" class="bg-secondary text-white">Time</th>
                        <th scope="col" class="bg-secondary text-white">Status</th>
                    </tr>

  <?php include "includes/user_manage.inc.php" ?>
  

  
  </tbody>
  </table>
  </div>
  </div>

		 <form id="cancel" action="cancel.php" method="post">
     <h5>Cancel booking</h5> Date: <input name="res_date" required="" type="text" /><br/>
			<p><input name="cancel" type="submit" value="Cancel" /></p>
		</form>

  </div>
  </div>
  </div>

