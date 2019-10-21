<?php
//DATABASE CONNECTION FILE
require 'dbh.inc.php';
require_once "includes/session.inc.php";

    // Uses email to find all bookings
    
    $bookEmail=$_SESSION['email'];
        $sql = "SELECT * FROM reservations WHERE res_email = '$bookEmail' ORDER BY res_date";
        // INIT CONNECTION
        $stmt = mysqli_stmt_init($conn);
		$result=mysqli_query($conn, $sql);
		
                
			while ($row = mysqli_fetch_array($result))
			{
				
					
								echo "<tr>";
                                echo "<td>" . $row['res_date'] . "</td>";;
								echo "<td>" . $row['res_type'] . "</td>";
								echo "<td>" . $row['res_slot'] . "</td>";
								echo "<td></td>";
								echo "</tr>";
						
				}
				
			

    



