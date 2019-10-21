<?php require_once "admin-header.php" ?>



<div class="admincss bg-user bg-light w-100 vh-100 d-flex flex-column align-center justify-content-center">
<h4 class="mt-3 text-center"> Are you sure you want to logout?</h4>
        
        <hr>

         
         <form action="includes/admin-logout.inc.php" method="post">
         <div class="form-group">
            <button class="btn btn-outline-secondary btn-block current"><a href="admin-index.php"> No, I want to stay here</a> </button>
            <button type="submit " class="btn btn-primary btn-block" > Sign Out  </button>
        </div>
</form>



</div>



    
    
    
    
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->



  <?php require_once "admin-footer.php" ?>