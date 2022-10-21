<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Invoice SET Iid='$_GET[Iid]',CustomerID='$_GET[CustomerID]',CartID='$_GET[CartID]'
 WHERE Iid='$_GET[Iid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='select.php'>กลับสู่หน้าหลัก</a>";
}
?>
