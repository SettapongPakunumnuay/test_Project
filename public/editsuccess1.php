<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "student");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE studentbio SET SID='$_GET[SID]',Sname='$_GET[Sname]',Slastname='$_GET[Slastname]'
 WHERE SID='$_GET[SID]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='mainmenu.php'>กลับสู่หน้าหลัก</a>";
}
?>