<p>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "Student");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM studentbio WHERE SID='$_GET[SID]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form id="form1" name="form1" method="get" action="editsuccess1.php">
<p>
<label for="SID">รหัสนักศึกษา </label>
<input type="text" name="SID" id="SID" value="<?=$data['SID'];?>"/>
</p>
<p>
<label for="Sname">ชื่อ</label>
<input type="text" name="Sname" id="Sname" value="<?=$data['Sname'];?>"/>
</p>
<p>
<label for="Slastname">นามสกุล</label>
<input type="text" name="Slastname" id="Slastname" value="<?=$data['Slastname'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>
