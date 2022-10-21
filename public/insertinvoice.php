<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Add Invoice</title>
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
    <form action="insertsuccess.php" method="GET>
  <fieldset>
    <legend>Add New Promotion.</legend>
    <div class="form-group">
      <label for="Iid" class="form-label mt-4">รหัสใบเสร็จ</label>
      <input type="text" class="form-control" name="Iid" id="Iid" aria-describedby="emailHelp" placeholder="Enter Invoive ID">
      <small id="emailHelp" class="form-text text-muted">Please enter Product ID.</small>
    </div>
    <div class="form-group">
      <label for="CustomerID" class="form-label mt-4">รหัสลูกค้า</label>
      <input type="text" class="form-control" name="CustomerID" id="CustomerID" aria-describedby="emailHelp" placeholder="Enter Customer ID">
      <small id="emailHelp" class="form-text text-muted">Please enter Customer ID.</small>
    </div>
    <div class="form-group">
      <label for="CartId" class="form-label mt-4">รหัสตะกร้าสินค้า</label>
      <input type="text" class="form-control" name="CartId" id="CartId" aria-describedby="emailHelp" placeholder="Enter Cart ID">
      <small id="emailHelp" class="form-text text-muted">Please enter Cart ID.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Add</button>
    </p>
    </form>
</body>
</html>

<!--<form action="insertsuccess.php" method="GET">
<p>
<label for="Iid">รหัสใบเสร็จ </label>
<input type="text" name="Iid" id="Iid" value=""/>
</p>
<p>
<label for="CustomerId">รหัสลูกค้า</label>
<input type="text" name="CustomerId" id="CustomerId" value=""/>
</p>
<p>
<label for="CartId">ตะกร้าสินค้า</label>
<input type="text" name="CartId" id="CartId" value="" />
</p>

<p>
    <input type="submit">
</p>
</form>-->