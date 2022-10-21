<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles-login.css">
        <title>Welcome</title>
    </head>
    <body>
    <div class="welcome">
    <img class="image" src="yu.png">
    <br>

<?php 
    $user_name = $_GET["fname"];
    echo "Welcome ยินดีต้อนรับ <br> $user_name<br>";
    $user_pass = $_GET["pname"];
    //echo "your password is $user_pass";
?>
<br>
<a href = "index.html" >เข้าสู่หน้าหลัก </a>
</div>
</body>
</html>