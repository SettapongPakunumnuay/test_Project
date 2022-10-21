<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Add Product</title>
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
    <form action="insertprosuc.php" method="GET">
  <fieldset>
    <legend>Add New Product.</legend>
    <div class="form-group ">
      <label for="exampleInputEmail1" class="form-label mt-4">รหัสลินค้า</label>
      <input type="text" class="form-control" name="ProductID" id="ProductID" aria-describedby="emailHelp" placeholder="Enter ProductID">
      <small id="emailHelp" class="form-text text-muted">Please enter product code.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">ชื่อสินค้า</label>
      <input type="text" class="form-control" name="ProductName" id="ProductName" aria-describedby="emailHelp" placeholder="Enter ProductName">
      <small id="emailHelp" class="form-text text-muted">Please enter product Name.</small>
    </div>
    <div class="form-group">
    <label class="form-label mt-4">ราคาสินค้า</label>
    <div class="form-group">
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" name="Price" id="Price" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">วันผลิต</label>
      <input type="date" class="form-control" name="CDate" id="CDate" aria-describedby="emailHelp" placeholder="Enter CDate">
      <small id="emailHelp" class="form-text text-muted">Please enter CDate.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">วันหมดอาย</label>
      <input type="date" class="form-control" name="ModDate" id="ModDate" aria-describedby="emailHelp" placeholder="Enter ModDate">
      <small id="emailHelp" class="form-text text-muted">Please enter ModDate.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">สินค้าในสต็อค</label>
      <input type="text" class="form-control" name="Deleted" id="Deleted" aria-describedby="emailHelp" placeholder="Enter Deleted">
      <small id="emailHelp" class="form-text text-muted">Please enter Deleted.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Add</button>
    </p>
    </form>
</body>
</html>

<!--<form action="insertprosuc.php" method="GET">
<p>
<label for="ProductID">รหัสลินค้า </label>
<input type="text" name="ProductID" id="ProductID" value=""/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value=""/>
</p>
<p>
<label for="Price">ราคาสินค้า</label>
<input type="text" name="Price" id="Price" value="" />
</p>
<p>
<label for="CDate">วันผลิต</label>
<input type="date" name="CDate" id="CDate" value=""/>
</p>
<p>
<label for="ModDate">วันหมดอาย </label>
<input type="date" name="ModDate" id="ModDate" value=""/>
</p>
<p>
<label for="Deleted">สินค้าในสต็อค</label>
<input type="text" name="Deleted" id="Deleted" value=""/>
</p>

<p>
    <input type="submit">
</p>
</form>-->