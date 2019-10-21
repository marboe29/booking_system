<?php
include "includes/session.inc.php";

// init
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib_res.php";

$reslib = new Res();
$bookName= $_SESSION['nameFirst'].' '.$_SESSION['nameLast'];


 /* only allow registered users to book
session_start();
if (!is_array($_SESSION['user'])) {
  die(json_encode([
    "status" => 0,
    "message" => "You must be signed in first"
  ]));
}
*/

// ajax request
if ($_POST['req']) { switch ($_POST['req']) {
  // invaild request
  default :
    echo json_encode([
      "status" => 0,
      "message" => "Invalid request"
    ]);
    break;

  // shwos calerdar & date 
  case "show-cal":
    // Selected month and year, takes current server time 
    $thisMonth = (is_numeric($_POST['month']) && $_POST['month']>=1 && $_POST['month']<=12) ? $_POST['month'] : date("n");
    $thisYear = is_numeric($_POST['year']) ? $_POST['year'] : date("Y");
    $thisStart = strtotime(sprintf("%s-%02u-01", $thisYear, $thisMonth));
    $daysInMonth = date("t", $thisStart);
    $thisEnd = strtotime(sprintf("%s-%02u-%s", $thisYear, $thisMonth, $daysInMonth));
    $startDay = date("N", $thisStart);
    $endDay = date("N", $thisEnd);
    $yearNow = date("Y");
    $monthNow = date("n");
    $dayNow = date("j");

    // Calculate calendar squares
    $squares = [];

    // If the first day of the month is not Sunday, pad with blanks
    if ($startDay != 7) { for ($i=0; $i<$startDay; $i++) {
      $squares[] = ["b"=>1];
    }}

    // Days that have already past are not selectable
    $inow = 1;
    if ($thisYear==$yearNow && $thisMonth==$monthNow) {
      for ($inow=1; $inow<=$dayNow; $inow++) {
        $squares[] = ["d"=>$inow, "b"=>1];
      }
    }

    // Populates the rest with selectable days
    for ($inow; $inow<=$daysInMonth; $inow++) {
      $squares[] = ["d"=>$inow];
    }

    // If the last day of the month is not Saturday, pad with blanks
    if ($endDay != 6) {
      $blanks = $endDay==7 ? 6 : 6-$endDay;
      for ($i=0; $i<$blanks; $i++) {
        $squares[] = ["b"=>1];
      }
    }

    // Draw calendar, Month selector
    $months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    echo "<select class='month'>";
    // Does not allow months that have already passed this year
    for ($i=($yearNow==$thisYear ? $monthNow : 1); $i<=12; $i++) {
      printf("<option value='%02u'%s>%s</option>", 
        $i, $i==$thisMonth?" selected":"", $months[$i-1]
      );
    }
    echo "</select>";

    // Year selector
    echo "<select class='year'>";
    // 3 years from now 
    for ($i=$yearNow; $i<=$yearNow+3; $i++) {
      printf("<option value='%s'%s>%s</option>", 
        $i, $i==$thisYear?" selected":"", $i
      );
    }
    echo "</select>";

    // Dates
    echo "<table><tr class='days'>";

    // First row Days of week
    $days = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
    foreach ($days as $d) { echo "<td>$d</td>"; }
    echo "</tr><tr>";

    // Following rows Days in month
    $total = count($squares);
    $first = true;
    for ($i=0; $i<$total; $i++) {
      echo "<td class='";
      if ($squares[$i]['b']) {
        echo "blank";
      } else if ($first) {
        echo "active";
        $first = false;
      } else {
        echo "pick";
      }
      echo "'>";
      if ($squares[$i]['d']) { echo $squares[$i]['d']; }
      echo "</td>";
      if ($i!=0 && ($i+1)%7==0) {
        echo "</tr><tr>";
      }
    }
    echo "</tr></table>";
    break;

  // shows time slot logic AM/PM
  case "show-slot":
?>
    <select>
      <option value="8:00 AM">AM 8-9</option>>
      <option value="9:00 AM">AM 9-10</option>>
      <option value="10:00 AM">AM 10-11</option>>
      <option value="1:00 PM">PM 1-2</option>>
      <option value="2:00 PM">PM 2-3</option>>
      <option value="3:00 PM">PM 4-5</option>>
    </select>
    <?php break;

// shows massage type logic

  case "show-type":
  ?>
  <select>
      <option value="Sports massage">Sports Massage</option>
      <option value="Therapeutic Massage">Therapeutic Massage</option>
      <option value="Tissue Massage">Deep Tissue Massage</option>
      <option value="Muscle Massage">Muscle Massage</option>
  </select>

    <?php break;


    

  // add new reservation 
  case "book-slot":
    // Save reservation to database
    $pass = $reslib->bookSlot(
      $bookName, $_SESSION['email'], $_POST['tel'], $_POST['date'], $_POST['slot'], $_POST['type'],
      $_POST['notes'] ? $_POST['notes'] : ""
    );
    


    // sends an email 
    if ($pass) {
      $message = "";
      foreach ($_POST as $k=>$v) {
        $message .= $k . " - " . $v;
      }
      @mail("marboe29@student.wintec.ac.nz", "Reservation receieved", $message);
    }
    
    // Server response
    echo json_encode([
      "status" => $pass ? 1 : 0,
      "message" => $pass ? "OK" : $reslib->error
    ]);
    break;

}}