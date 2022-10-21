<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Add Promotion</title>
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
    <form action="insertpromosuc.php" method="GET>
  <fieldset>
    <legend>Add New Promotion.</legend>
    <div class="form-group">
      <label for="Promoid" class="form-label mt-4">รหัสโปรโมชั่น</label>
      <input type="text" class="form-control" name="Promoid" id="Promoid" aria-describedby="emailHelp" placeholder="Enter Promotion id">
      <small id="emailHelp" class="form-text text-muted">Please enter product code.</small>
    </div>
    <div class="form-group">
      <label for="Promoname" class="form-label mt-4">ชื่อโปรโมชั่น</label>
      <input type="text" class="form-control" name="Promoname" id="Promoname" aria-describedby="emailHelp" placeholder="Enter Promotion name">
      <small id="emailHelp" class="form-text text-muted">Please enter product Name.</small>
    </div>
    <div class="form-group">
      <label for="CDate" class="form-label mt-4">วันผลิต</label>
      <input type="date" class="form-control" name="CDate" id="CDate" aria-describedby="emailHelp" placeholder="Enter CDate">
      <small id="emailHelp" class="form-text text-muted">Please enter CDate.</small>
    </div>
    <div class="form-group">
      <label for="ModDate" class="form-label mt-4">วันหมดอาย</label>
      <input type="date" class="form-control" name="ModDate" id="ModDate" aria-describedby="emailHelp" placeholder="Enter ModDate">
      <small id="emailHelp" class="form-text text-muted">Please enter ModDate.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Add</button>
    </p>
    </form>
</body>
</html>

<!--<form action="insertpromosuc.php" method="GET">
<p>
<label for="Promoid">รหัสโปรโมชั่น </label>
<input type="text" name="Promoid" id="Promoid" value=""/>
</p>
<p>
<label for="Promoname">ชื่อโปรโมชั่น</label>
<input type="text" name="Promoname" id="Promoname" value=""/>
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
    <input type="submit">
</p>
</form>-->