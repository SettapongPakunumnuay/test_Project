<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Add Customer</title>
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
    <form action="insertcussuccess.php" method="GET>
  <fieldset>
    <legend>Add New Promotion.</legend>
    <div class="form-group">
      <label for="CustomerID" class="form-label mt-4">รหัสลูกค้า</label>
      <input type="text" class="form-control" name="CustomerID" id="CustomerID" aria-describedby="emailHelp" placeholder="Enter Customer id">
      <small id="emailHelp" class="form-text text-muted">Please enter Customer id.</small>
    </div>
    <div class="form-group">
      <label for="CustomerName" class="form-label mt-4">ชื่อลูกค้า</label>
      <input type="text" class="form-control" name="CustomerName" id="CustomerName" aria-describedby="emailHelp" placeholder="Enter Customer name">
      <small id="emailHelp" class="form-text text-muted">Please enter Customer name.</small>
    </div>
    <div class="form-group">
      <label for="Locations" class="form-label mt-4">ที่อยู่</label>
      <input type="text" class="form-control" name="Locations" id="Locations" aria-describedby="emailHelp" placeholder="Enter Location">
      <small id="emailHelp" class="form-text text-muted">Please enter Location.</small>
    </div>
    <div class="form-group">
      <label for="Email" class="form-label mt-4">อีเมล</label>
      <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Enter E-mail">
      <small id="emailHelp" class="form-text text-muted">Please enter E-mail.</small>
    </div>
    <div class="form-group">
      <label for="DateOfBirth" class="form-label mt-4">วัน/เดือน/ปี เกิด</label>
      <input type="date" class="form-control" name="DateOfBirth" id="DateOfBirth" aria-describedby="emailHelp" placeholder="Enter Birthday">
      <small id="emailHelp" class="form-text text-muted">Please enter Birthday.</small>
    </div>
    <div class="form-group">
      <label for="CDate" class="form-label mt-4">วันผลิต</label>
      <input type="date" class="form-control" name="CDate" id="CDate" aria-describedby="emailHelp" placeholder="Enter CDate">
      <small id="emailHelp" class="form-text text-muted">Please enter CDate.</small>
    </div>
    <div class="form-group">
      <label for="ModDate" class="form-label mt-4">วันหมดอายุ</label>
      <input type="date" class="form-control" name="ModDate" id="ModDate" aria-describedby="emailHelp" placeholder="Enter ModDate">
      <small id="emailHelp" class="form-text text-muted">Please enter ModDate.</small>
    </div>
    <div class="form-group">
      <label for="Postcode" class="form-label mt-4">รหัสไปรษณีย์</label>
      <input type="text" class="form-control" name="Postcode" id="Postcode" aria-describedby="emailHelp" placeholder="Enter Postcode">
      <small id="emailHelp" class="form-text text-muted">Please enter Postcode.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Add</button>
    </p>
    </form>
</body>
</html>

<!--<form action="insertcussuccess.php" method="GET">
<p>
<label for="CustomerID">รหัสลูกค้า </label>
<input type="text" name="CustomerID" id="CustomerID" value=""/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value=""/>
</p>
<p>
<label for="Locations">ที่อยู่</label>
<input type="text" name="Locations" id="Locations" value="" />
</p>
<p>
<label for="Email">อีเมล </label>
<input type="text" name="Email" id="Email" value=""/>
</p>
<p>
<label for="DateOfBirth">วัน/เดือน/ปี เกิด </label>
<input type="date" name="DateOfBirth" id="DateOfBirth" value=""/>
</p>
<p>
<label for="CDate">วันผลิต </label>
<input type="date" name="CDate" id="CDate" value=""/>
</p>
<p>
<label for="ModDate">วันหมดอายุ </label>
<input type="date" name="ModDate" id="ModDate" value=""/>
</p>
<p>
<label for="Postcode">รหัสไปรษณีย์ </label>
<input type="int" name="Postcode" id="Postcode" value=""/>
</p>

<p>
    <input type="submit">
</p>
</form>-->