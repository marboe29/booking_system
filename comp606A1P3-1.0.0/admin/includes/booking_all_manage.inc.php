<?php
//DATABASE CONNECTION FILE
require 'dbh.inc.php';

// GRAB ALL TABLES FROM RESERVATIONS
$sql = "SELECT * FROM reservations ORDER BY res_date";
        // INIT CONNECTION
        $stmt = mysqli_stmt_init($conn);
        $result=mysqli_query($conn, $sql);
                
			while ($row = mysqli_fetch_array($result))
			{
				
					
								echo "<tr>";
                                echo "<td>" . $row['res_date'] . "</td>";
                                echo "<td>" . $row['res_name'] . "</td>";
                                echo "<td>" . $row['res_email'] . "</td>";
                                echo "<td>" . $row['res_tel'] . "</td>";
								echo "<td>" . $row['res_type'] . "</td>";
								echo "<td>" . $row['res_slot'] . "</td>";
								echo "<td></td>";
								echo "</tr>";
						
				}