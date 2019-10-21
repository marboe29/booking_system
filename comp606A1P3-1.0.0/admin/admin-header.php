<?php 
session_start();
if(!isset($_SESSION['adminUser'])){
   header("admin-login.php");
}
?>

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
    <!-- Master CSS -->
    <link rel="stylesheet" href="../php/master.css">
    

    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/yxl7rgd.css">


    <link rel="stylesheet" href="../php/master.css">
    

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><img src="https://muscleworx.co.nz/wp-content/uploads/2018/11/cropped-logo2-2018.jpg" alt=""></div>
      <div class="list-group list-group-flush">
        <a href="admin-index.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="admin-all-bookings.php" class="list-group-item list-group-item-action bg-light">All Bookings</a>
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary">Toggle Menu</button>

      

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <li class="nav-item">
              <a class="nav-link btn btn-primary text-white" href="admin-logout.php">Logout</a>
            
          </ul>
        </div>
      </nav>

      <div class="container-fluid">