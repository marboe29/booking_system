<!-- Header -->
<?php 
require_once "includes/header.inc.php";
require_once "includes/session.inc.php"
?>

<div class="container-fluid bg-user w-100 vh-100 d-flex flex-column align-center justify-content-center">
<div class="container user-card bg-light d-flex flex-column align-center justify-content-center p-5">
<h4 class="card-title mt-3 text-center"> 
            Are you sure you want to logout?</h4>
        
        <hr>

         
         <form action="includes/logout.inc.php" method="post">
         <div class="form-group">
            <button class="btn btn-outline-secondary btn-block current"><a href="user_panel.php"> No, I want to stay here</a> </button>
            <button type="submit " class="btn btn-primary btn-block" > Sign Out  </button>
        </div>
</form>



</div>



    </div>




