<?php

//CHECK ID USER ACCESS PAGE FROM LINK
if (isset($_POST['signup-submit'])) {


//DATABASE CONNECTION FILE
require 'dbh.inc.php';


  //SIGN UP FORM INFORMATION
  $nameFirst = $_POST['first-name'];
  $nameLast = $_POST['last-name'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];


  // CHECK EMPTY FIELDS
    // PHP Logical Operators "||"	= or
  if (empty($nameLast) || empty($nameFirst) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../signup.php?error=emptyfields&mail=" . $email . "&first=" . $nameFirst . "&last=" . $nameLast);
    exit();
  }




    //FILTER_VALIDATE_EMAIL —Check if the variable $email is a valid email address
    //https://www.w3schools.com/php/filter_validate_email.asphttps://www.w3schools.com/php/filter_validate_email.asp
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
  }
  // CHECKS PASSWORD
    // LOGICAL OPERATORS "!" = NOT  "==" = EQUAL
  else if ($password !== $passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }
  
  
    //CHECK IF ALREADY EMAIL EXISTS
    else {
      $sql = "SELECT * FROM users WHERE emailUsers=?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      //PROCEDUREAL STYLE — QUERY SQL https://dev.mysql.com/doc/apis-php/en/apis-php-mysqli-stmt.store-result.html
      mysqli_stmt_bind_param($stmt, "s", $email); //Binds variables to a prepared statement as parameters
      mysqli_stmt_execute($stmt);                 //Executes a query that has been previously prepared using the mysqli_prepare() function
      mysqli_stmt_store_result($stmt);

      $resultCount = mysqli_stmt_num_rows($stmt);   //Returns the number of rows in the result set
      mysqli_stmt_close($stmt);                     //Closes a prepared statement
      if ($resultCount > 0) {                       //Checks if there is more than one results
        header("Location: ../signup.php?error=emailtaken=");
        exit();
      }


      else {
        //SQL STATMEMENT—INSERT INFO TO DATABASE
        $sql = "INSERT INTO users (nameLast, nameFirst, emailUsers, pwdUsers) VALUES (?, ?, ?, ?)";
        // INIT CONNECTION
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          //SQL ERROR SENDS
          header("Location: ../signup.php?error=sqlerror2");
          exit();
        }

        else {

          //HASHED PASSWORD
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssss", $nameLast, $nameFirst, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
            //SUCCESS SENDS
          header("Location: ../login.php?signup=success");
          exit();

          
        }
      
    }
    
  }
}
  //CLOSE STATEMENT & DATABASE
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  //NOT NORMAL ACCESS SENDS
  header("Location: ../signup.php");
  exit();
}
