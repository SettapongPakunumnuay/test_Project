<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Edit Invoice</title>
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
                        <a class="nav-link " href="selectpromo.php">Promotion</a>
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
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
    <body>
<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM Invoice WHERE Iid='$_GET[Iid]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<form method="get" action="editsuccess.php">
<fieldset>
    <legend>Edit Product.</legend>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">รหัสใบเสร็จ</label>
      <input type="text" class="form-control" name="Iid" id="Iid" value="<?=$data['Iid'];?>"/> 
      <small id="emailHelp" class="form-text text-muted">Please enter Invoice code.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">รหัสลูกค้า</label>
      <input type="text" class="form-control" name="CustomerID" id="CustomerID" value="<?=$data['CustomerID'];?> "/>
      <small id="emailHelp" class="form-text text-muted">Please enter CustomerID .</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">รหัสตะกร้าสินค้า</label>
      <input type="text" class="form-control" name="CartID" id="CartID" value="<?=$data['CartID'];?>" />
      <small id="emailHelp" class="form-text text-muted">Please enter Cart ID.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Edit</button>
    </p>
    </form>
</body>
</html>



<!--<p>
<label for="Iid">รหัสใบเสร็จที่จะแก้ไข</label>
<input type="text" name="Iid" id="Iid" value="<?=$data['Iid'];?>"/>
</p>
<p>
<label for="CustomerID">รหัสลูกค้าที่ต้องการแก้ไข</label>
<input type="text" name="CustomerID" id="CustomerID" value="<?=$data['CustomerID'];?>"/>
</p>
<p>
<label for="CartID">ตะกร้าสินค้าที่จะแก้ไข</label>
<input type="text" name="CartID" id="CartID" value="<?=$data['CartID'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>-->