<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Add Member</title>
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
                    <li class="nav-item">
                    <a class="nav-link" href="mainmenu.php">Student</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" href="menumember.php">Member</a>
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
    <form action="insertmembersuc.php" method="GET>
  <fieldset>
    <legend>Add New member.</legend>
    <div class="form-group">
      <label for="MID" class="form-label mt-4">รหัสสมาชิก</label>
      <input type="text" class="form-control" name="MID" id="MID" aria-describedby="emailHelp" placeholder="Enter Member ID">
      <small id="emailHelp" class="form-text text-muted">Please enter Member ID</small>
    </div>
    <div class="form-group">
      <label for="Mname" class="form-label mt-4">ชื่อสมาชิก</label>
      <input type="text" class="form-control" name="Mname" id="Mname" aria-describedby="emailHelp" placeholder="Enter Name">
      <small id="emailHelp" class="form-text text-muted">Please enter Name.</small>
    </div>
    <div class="form-group">
      <label for="MLastname" class="form-label mt-4">นามสกุล</label>
      <input type="text" class="form-control" name="MLastname" id="MLastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
      <small id="emailHelp" class="form-text text-muted">Please enter Lastname.</small>
    </div>
    <div class="form-group">
      <label for="Email" class="form-label mt-4">อีเมล</label>
      <input type="text" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Enter Email">
      <small id="emailHelp" class="form-text text-muted">Please enter Email.</small>
    </div>
    <div class="form-group">
      <label for="Tel" class="form-label mt-4">เบอร์</label>
      <input type="text" class="form-control" name="Tel" id="Tel" aria-describedby="emailHelp" placeholder="Enter Tel">
      <small id="emailHelp" class="form-text text-muted">Please enter Tel.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Add</button>
    </p>
    </form>
</body>
</html>