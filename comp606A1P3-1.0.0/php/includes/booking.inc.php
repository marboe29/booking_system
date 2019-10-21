<?php


//CHECK ID USER ACCESS PAGE FROM LINK
if (isset($_POST['book-submit'])) {


    //DATABASE CONNECTION FILE
    require 'dbh.inc.php';


  //BOOKING FORM INFORMATION
  $resEmail = $_SESSION['email'];
  $resName = $_SESSION['nameFirst'] . $_SESSION['nameLast'];
  $resMassage = $_POST['restype'];
  $resDate = //$_POST['date'];
  $resTime = $_POST['time'];
  $resNotes = $_POST['notes'];


    // CHECK EMPTY FIELDS
    // PHP Logical Operators "||"	= or
    //   if (empty($nameLast) || empty($nameFirst) || empty($email) || empty($password) || empty($passwordRepeat)) {
    //     header("Location: ../signup.php?error=emptyfields&mail=" . $email . "&first=" . $nameFirst . "&last=" . $nameLast);
    //     exit();
    //   }

  


    else {
        //SQL STATMEMENT—INSERT INFO TO DATABASE
        $sql = "INSERT INTO reservations (res_name, res_email, res_notes, res_date, res_slot) VALUES (?, ?, ?, ?, ?)";
        // INIT CONNECTION
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          //SQL ERROR SENDS
          header("Location: ../booking.php?error=sqlerror2");
          exit();
        }

        else {
            mysqli_stmt_bind_param($stmt, "sssss", $resName, $resEmail, $resNotes, $resDate, $resTime);
            mysqli_stmt_execute($stmt);
              //SUCCESS SENDS
            header("Location: ../bookingphp?signup=success");
            exit();
        }

     }
    
}
 
        


 //CLOSE STATEMENT & DATABASE
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  else {
    //NOT NORMAL ACCESS SENDS
    header("Location: ../booking.php");
    exit();
  }


