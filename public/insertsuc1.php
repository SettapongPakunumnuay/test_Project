<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"Student");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO studentbio(SID, Sname, Slastname) 
VALUES ('$_GET[SID]','$_GET[Sname]','$_GET[Slastname]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='mainmenu.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='mainmenu.php'>"."กลับหน้าหลัก"."</a>";
}
?>
