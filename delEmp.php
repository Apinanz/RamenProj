<?php session_start(); 
ini_set('display_errors', 1);
error_reporting(~0);

// Create connection
$connect = new mysqli('localhost', 'root', '', 'login_db');

// Check Connection

if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
  }
$result = mysqli_query($connect,"SELECT * FROM Employee");
$sql = "DELETE FROM Employee WHERE Employee_id ='" . $_GET["userid"] . "'";
if ($connect->query($sql) === TRUE) {
   header("Location: employee.php");  
  } else {
    echo "Error deleting record: " . $connect->error;
  }
  
include('condb.php');
 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
  if($level!='admin'){
    Header("Location: ../logout.php");  
  }  

?>