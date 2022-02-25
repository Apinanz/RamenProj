<html>
<head>
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Keyword
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "login_db";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM employee WHERE Employee_Firstname LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
<table width="600" border="1">
<tr>
<th>ลำดับ</th>
<th>ชื่อ</th>
<th>นามสกุล</th>
<th>เพศ</th>
<th>เบอร์</th>
</tr>

<tr>
   <td><?php echo $row['Employee_id']; ?></td>
   <td> <?php echo $row['Employee_Firstname']; ?></td>
   <td><?php echo $row['Employee_Lastname']; ?></td>
   <td><?php echo $row['Employee_gender']; ?></td>
   <td><?php echo $row['Employee_phone']; ?></td>
   </tr>

</table>
<?php
mysqli_close($conn);
?>
</body>
</html>