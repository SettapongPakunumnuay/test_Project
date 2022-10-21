<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"Movie");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Movies(MovieID, Moviename, Des, Time, Date) 
VALUES ('$_GET[MovieID]','$_GET[Moviename]','$_GET[Des]','$_GET[Time]','$_GET[Date]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='menumovie.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='menumovie.php'>"."กลับหน้าหลัก"."</a>";
}
?>