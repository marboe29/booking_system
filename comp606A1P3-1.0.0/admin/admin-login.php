<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>musclex</title>

       <!-- Bootstrap 4 CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       
       <!-- fullCalendar-->
    <link rel="stylesheet" href="fullCalendar/simple-sidebar.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../php/master.css">

    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/yxl7rgd.css">
</head>
<body>






<div class="container-fluid bg-user w-100 vh-100 d-flex flex-column align-center justify-content-center">
<div class="container user-card bg-light d-flex flex-column align-center justify-content-between p-5">
    

<div class="login d-flex align-items-center py-5">


        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Muscleworx Admin</h3>


               <?php
                //ERROR HANDLERS
                //EMPTY FIELDS
                 if (isset($_GET['error'])) {
                 if ($_GET['error'] == "wrongpwd") {
                  echo '<p class="alert-primary"> Incorrect Password</p><hr>';
                 }
                }
                ?>


              <!-- Login Form -->
              <form action="includes/admin-login.inc.php" method="post" >
                <div class="form-label-group">
                  <input type="text" id="inputuser" class="form-control" placeholder="Username" name="user" required>
                  <label for="inputEmail">Username</label>
                </div>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control"  name="pwd" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>

                
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                <div class="text-center"></div>

                <hr>
                <a class="text-uppercase font-weight-bold mb-2" href="../php/index.php">User Homepage</a>
              

              </form>
            
          </div>
        </div>







    </div>
</div>




  






<!-- Bootstrap JS files -->
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
