<?php session_start(); 
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


<form action="logout.php">
	<FONT FACE = "Fixedsys" align="middle" color = "#824418" > <H1><B> WELCOME</B></H1>  </FONT>
	<h3 align="middle" > BILL </h3>
	
	</form>

</body>
</html>
