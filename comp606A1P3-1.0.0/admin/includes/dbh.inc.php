<?php
// INCLUDED THE DATABASE CONNECTION FILE HERE SO ITS EASIER TO ACESSS FROM OTHER FILES

$dBhost = "localhost";
$dBUsername = "bookUser";
$dBPassword = "";
$dBName = "booking";


$conn = mysqli_connect($dBhost, $dBUsername, $dBPassword, $dBName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
