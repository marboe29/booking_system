<?php
class Res {
 // database functions
  protected $pdo = null;
  protected $stmt = null;
  public $error = "";
  public $lastID = null;
// __construct() connects to the database
  function __construct() {
 
  // params db_host, dbcharset, db_name, db_user, dp_password attempt connection 
    try {
      $str = "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET;
      if (defined('DB_NAME')) { $str .= ";dbname=" . DB_NAME; }
      $this->pdo = new PDO(
        $str, DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );
      return true;
    }
    // error message
    catch (Exception $ex) {
      print_r($ex);
      die();
    }
  }
// __destruct() close connection when done
  function __destruct() {
  
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }
// exec() runs insert, replace, update, delete query
  function exec($sql, $data=null) {
  // params $sql SQL query $data array of data
 
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($data);
      $this->lastID = $this->pdo->lastInsertId();
    } catch (Exception $ex) {
      $this->error = $ex;
      return false;
    }
    $this->stmt = null;
    return true;
  }
// fetch() performs select query
  function fetch($sql, $cond=null, $key=null, $value=null) {
  //   params $sql SQL query
  //   $cond array of conditions
  //   $key sort in $key=>data order, optional
  //   $value $key must be provided, sort in $key=>$value order

    $result = false;
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
      if (isset($key)) {
        $result = array();
        if (isset($value)) {
          while ($row = $this->stmt->fetch(PDO::FETCH_NAMED)) {
            $result[$row[$key]] = $row[$value];
          }
        } else {
          while ($row = $this->stmt->fetch(PDO::FETCH_NAMED)) {
            $result[$row[$key]] = $row;
          }
        }
      } else {
        $result = $this->stmt->fetchAll();
      }
    } catch (Exception $ex) {
      $this->error = $ex;
      return false;
    }
    $this->stmt = null;
    return $result;
  }


  // booking bookSlot() reserve for the time slot

  function bookSlot ($name, $email, $tel, $date, $slot, $type, $notes="") {

    // Check if customer already booked on the time slot
    $sql = "SELECT * FROM `reservations` WHERE `res_email`=? AND `res_date`=? AND `res_slot`=?";
    $cond = [$email, $date, $slot];
    $check = $this->fetch($sql, $cond);
    if (count($check)>0) {
      $this->error = $email . " has already reserved " . $date . " " . $slot;
      return false;
    }

    // Process reservation
    $sql = "INSERT INTO `reservations` (`res_name`, `res_email`, `res_tel`, `res_notes`, `res_date`, `res_slot`, `res_type` ) VALUES (?,?,?,?,?,?,?)";
    $cond = [$name, $email, $tel, $notes, $date, $slot, $type];
    return $this->exec($sql, $cond);
  }

  // get all reservations within a selected date range
  function bookGet ($start, $end) {
  // bookGet() get reservation for selected month/year
    $search = $this->fetch(
      "SELECT * FROM `reservations` WHERE `res_date` BETWEEN ? AND ?",
      [$start, $end]
    );
    return count($search)==0 ? false : $search ;
  }
}
?>