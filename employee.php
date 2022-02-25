<?php session_start(); 
ini_set('display_errors', 1);
error_reporting(~0);
$strKeyword = null;
if(isset($_POST["txtKeyword"])){
$strKeyword = $_POST["txtKeyword"];
}
// Create connection
$connect = new mysqli('localhost', 'root', '', 'login_db');

// Check Connection

if ($connect->connect_error) {
    die("Something wrong.: " . $connect->connect_error);
  }

$sql ="SELECT * FROM Employee WHERE Employee_id LIKE '%".$strKeyword."%' 
                            OR Employee_Firstname LIKE '%".$strKeyword."%' 
                            OR Employee_Lastname LIKE '%".$strKeyword."%' 
                            OR Employee_gender LIKE '%".$strKeyword."%' 
                            OR Employee_phone LIKE '%".$strKeyword."%' ";
$result = $connect->query($sql);

include('condb.php');
 
  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
  if($level!='admin'){
    Header("Location: ../logout.php");  
  }  

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  position: relative;
  overflow: hidden;
  background-color: #524545;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 70px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #524545;
  color: black;
}

.topnav a.active {
  background-color: #C40001;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}



/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
</style>

<BODY BACKGROUND="bg.png"> 
</BODY> 



<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="search_employee.css">

</head>
<body>

<!-- Top navigation -->
<div class="topnav">

  <div class="topnav-centered">
  <a class="active" href="admin.php">HOME</a>
  </div>

  <a href="menu.php">MENU</a>
  <a href="order.php">ORDER</a>
  <a href="bill.php">BILL</a>

  <!-- Right-aligned links -->
  <div class="topnav-right">
  <a href="employee.php">EMPLOYEE</a>
  <a href="table.php">TABLE</a>

  </div>

</div>

<FONT FACE = "Fixedsys" align="middle" color = "#824418" > <H1><B> EMPLOYEE </B></H1>  </FONT>



<div class="container">
   <div class="search">
   <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
      <input name="txtKeyword" type="text"  id="txtKeyword" class="searchTerm" value="<?php echo $strKeyword;?>" placeholder="SEARCH">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
</form>
   </div>
</div>


<div class="container"></div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <td width="5%">Employee_id</td>
                    <td width="5%">Employee_Firstname</td>
                    <td width="5%">Employee_Lastname</td>
                    <td width="15%">Employee_gender</td>
                    <td width="5%">Employee_phone</td>
                    <td width="5%">Delete</td>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
  <tr>
   <td><?php echo $row['Employee_id']; ?></td>
   <td> <?php echo $row['Employee_Firstname']; ?></td>
   <td><?php echo $row['Employee_Lastname']; ?></td>
   <td><?php echo $row['Employee_gender']; ?></td>
   <td><?php echo $row['Employee_phone']; ?></td>
   <td><a href="delEmp.php? userid=<?php echo $row["Employee_id"]; ?>" >Delete</a></td>
   </tr>
 <?php endwhile ?>

 
	


</html>
