<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE movies SET MovieID='$_GET[MovieID]',Moviename='$_GET[Moviename]',Des='$_GET[Des]',Time='$_GET[Time]',Date='$_GET[Date]'
 WHERE MovieID ='$_GET[MovieID]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='menumovie.php'>กลับสู่หน้าหลัก</a>";
}
?>
