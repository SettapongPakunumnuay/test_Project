<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Customer SET CustomerID='$_GET[CustomerID]',CustomerName='$_GET[CustomerName]',Locations='$_GET[Locations]',Email='$_GET[Email]'
,DateOfBirth='$_GET[DateOfBirth]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]',Postcode='$_GET[Postcode]'
 WHERE CustomerID='$_GET[CustomerID]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectCus.php'>กลับสู่หน้าหลัก</a>";
}
?>
