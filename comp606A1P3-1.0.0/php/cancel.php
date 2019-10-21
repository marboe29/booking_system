<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Cancel booking</title>
</head>

<body>

<?php

		
	if(empty($errors))
	{
		include 'lib/config.php';

		// Create connection
		$conn = mysqli_connect($db_host, $db_name, $db_charset, $db_user, $db_password);

		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$res_date = intval(htmlspecialchars($_POST["res_date"]));
		$sql = "DELETE FROM $reservations WHERE res_date = $res_date";
        
        if (mysqli_query($conn, $sql)) {
			echo "<h3>Booking cancelled.</h3>";
		}
		else {

            $errors = "<h3><font color=\"red\"> try again! mark </font></h3>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            echo $errors;
        }
        
		mysqli_close($conn);
	}
?>

<a href="user_manage.php"><p>Back to the booking calendar</p></a>

</body>

</html>
