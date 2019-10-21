<!-- ADMIN HEADER -->
<?php require_once "admin-header.php" ?>




    <div class="">
 
        <p class="lead mt-5">Upcoming Bookings</p>  
        <p>All upcoming bookings is displayed here.</p>
        
        <hr class="my-4">
    </div>


    <!-- DATA TABLES -->
  <div>
  <div class="">
  <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="bg-secondary text-white"> Date</th>
                        <th scope="col" class="bg-secondary text-white"> Name</th>
                        <th scope="col" class="bg-secondary text-white"> Email</th>
                        <th scope="col" class="bg-secondary text-white"> Phone</th>
                        <th scope="col" class="bg-secondary text-white">Massage</th>
                        <th scope="col" class="bg-secondary text-white">Time</th>
                        <th scope="col" class="bg-secondary text-white">Status</th>
                    </tr>

                    <!-- PULLS DATA FOR THE TABLE — SQL -->
                    <?php include "includes/booking_all_manage.inc.php" ?>


  
  </tbody>
</table>
  </div>
  </div>
</div>
</div>
</div>



    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->


<!-- ADMIN FOOTER -->
  <?php require_once "admin-footer.php" ?>