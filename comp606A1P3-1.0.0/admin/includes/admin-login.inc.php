<?php


//DATABASE CONNECTION FILE
  require 'dbh.inc.php';

  //LOGIN UP FORM INFORMATION
  $adminUser = $_POST['user'];
  $password = $_POST['pwd'];

// CHECK EMPTY FIELDS
  if (empty($adminUser) || empty($password)) {
    header("Location: ../admin-login.php?error=emptyfields&mailid=".$adminUser);
    exit();
  }

  else {
    //CONNECT DATABASE
    //DATABASE CONNECTION REFERENCE 
    $sql = "SELECT * FROM adminUsers WHERE user=?";
    // INIT CONNECTION
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      //SQL ERROR SENDS
      header("Location: ../admin-login.php?error=sqlerror");
      exit();
    }
    else {

      
      //BIND PARAMETERS
      mysqli_stmt_bind_param($stmt, "s", $adminUser);
      mysqli_stmt_execute($stmt);
              // GET RESULT FROM STATEMENT
      $result = mysqli_stmt_get_result($stmt);
              // STORE RESULT INTO VARIBLE
                //mysqli_fetch_assoc — Fetch a result row as an associative array
      if ($row = mysqli_fetch_assoc($result)) {


        //MATCH PASSWORD + DEHASHES PASSWORD
          //PASSWORD VERTIFY — Verifies that the given hash matches the given password
        $pwdCheck = password_verify($password, $row['pwd']);
        //PASSWORD ERROR
        if ($pwdCheck == false) {
          // PASSWORD ERROR SENDS
          header("Location: ../admin-login.php?error=wrongpwd");
          exit();
        }
        //PASSWORD CORRECT
        else if ($pwdCheck == true) {


          

          // CREATE SESSION
          session_start();
          // SESSION VARIABLES
         $_SESSION['adminUser'] = $row['user'];
         
          // USER LOGGED IN SENDS
          header("Location: ../admin-index.php");
          exit();
        }
      }
      else {
        header("Location: ../admin-login.php?login=wrongpwd");
        exit();
      }
    }
  
  }
  // CLOSE STATEMENT & CONNECTION
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

