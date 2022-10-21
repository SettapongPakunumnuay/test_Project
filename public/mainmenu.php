<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "student");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM studentbio";
$result=mysqli_query($objConnect ,$sql);

echo "<table width=\"700\" border=\"0\">";
echo "<tr bgcolor=\"#993333\"> ";
echo "<td><color=\"#FFFFFF\"> รหัสนักศึกษา </font></td>";
echo "<td><color=\"#FFFFFF\"> ชื่อนักศึกษา </font></td>";
echo "</tr>";
while($data = mysqli_fetch_array($result)) {
echo "<tr><td><a href='editdetail.php?SID=$data[SID]'>$data[SID]</a></td>";
echo "<td>$data[Sname]</td></tr>";

}
echo "</table>";
echo "<br>";echo "<br>";
echo "<a class = 'btn btn-light' href='insert1.php'>Add</a>";


?>