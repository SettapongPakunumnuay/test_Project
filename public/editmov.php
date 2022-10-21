<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Members</title>
    </head>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="main.html"><img src="logo.png" width="70px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link " href="main-form.html">Home
                          <span class="visually-hidden">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="selectproduct.php">Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="selectpromo.php">Promotion</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="selectCus.php">Customer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="select.php">Invoice</a>
                      </li>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pay.html">Payment</a>
                    </li>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="feedback.html">Feedback</a>
                    </li>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="price.html">Calculate</a>
                    </li>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="table.html">Product details</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="mainmenu.php">Student</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link " href="menumember.php">Member</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" href="menumovie.php">Movie</a>
                  </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </header>
        <body>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM movies WHERE MovieID='$_GET[MovieID]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="GET" action="editmovsuc.php">
<fieldset>
</h4>
    <div class="form-group row">
      <h5><br><label for="MovieID" class="col-sm-5 col-form-label text-dark badge bg-light">&nbsp รหัสหนัง (ไม่สามารถแก้ไขได้)</label></h5></br>
      <div class="col-sm-5">
        <input type="int" class="form-control " readonly="MovieID" name="MovieID" id="MovieID"  value="<?=$data['MovieID'];?>"/>
      </div>
    </div>
    <div class="form-group">
    <h5><br><label for="Moviename" class="col-sm-5 col-form-label text-dark badge bg-light">&nbsp ชื่อหนังที่จะแก้ไข</label></h5></br>
      <div class="col-sm-5">
       <input type="text" class="form-control" name="Moviename" id="Moviename" placeholder="ชื่อหนังที่จะแก้ไข" value="<?=$data['Moviename'];?>"/>
      </div>
    </div>
    <div class="form-group">
    <h5><br><label for="Des" class="col-sm-5 col-form-label text-dark badge bg-light">&nbsp คำอธิบายที่จะแก้ไข</label></h5></br>
      <div class="col-sm-5">
       <input type="text" class="form-control" name="Des" id="Des" placeholder="คำอธิบายที่จะแก้ไข" value="<?=$data['Des'];?>"/>
      </div>
    </div>
    <div class="form-group">
    <h5><br><label for="Time" class="col-sm-5 col-form-label text-dark badge bg-light">&nbsp เวลาที่จะแก้ไข</label></h5></br>
      <div class="col-sm-5">
       <input type="time" class="form-control" name="Time" id="Time" placeholder="เวลาที่จะแก้ไข" value="<?=$data['Time'];?>"/>
      </div>
    </div>
    <div class="form-group">
    <h5><br><label for="Date" class="col-sm-5 col-form-label text-dark badge bg-light">&nbsp เวลาที่จะแก้ไข</label></h5></br>
      <div class="col-sm-5">
       <input type="date" class="form-control" name="Date" id="Date" placeholder="เวลาที่จะแก้ไข" value="<?=$data['Date'];?>"/>
      </div>
    </div>
<p>
<br><input type="submit" class="btn btn-primary" value="แก้ไข" ></br>
</p>
</form>
</html>