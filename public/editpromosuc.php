<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Promotion SET Promoid='$_GET[Promoid]',Promoname='$_GET[Promoname]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]'
 WHERE Promoid ='$_GET[Promoid]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectpromo.php'>กลับสู่หน้าหลัก</a>";
}
?>
