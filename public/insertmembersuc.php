<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"Movie");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Members(MID, Mname, MLastname, Email, Tel) 
VALUES ('$_GET[MID]','$_GET[Mname]','$_GET[MLastname]','$_GET[Email]','$_GET[Tel]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='menumember.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='menumember.php'>"."กลับหน้าหลัก"."</a>";
}
?>