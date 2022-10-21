<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Add Movie</title>
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
    <body>
    <form action="inmovsuc.php" method="GET>
  <fieldset>
    <legend>Add New Movie.</legend>
    <div class="form-group">
      <label for="MovieID" class="form-label mt-4">รหัสหนัง</label>
      <input type="text" class="form-control" name="MovieID" id="MovieID" aria-describedby="emailHelp" placeholder="Enter Movie ID">
      <small id="emailHelp" class="form-text text-muted">Please enter Movie ID</small>
    </div>
    <div class="form-group">
      <label for="Moviename" class="form-label mt-4">ชื่อหนัง</label>
      <input type="text" class="form-control" name="Moviename" id="Moviename" aria-describedby="emailHelp" placeholder="Enter Name">
      <small id="emailHelp" class="form-text text-muted">Please enter Name.</small>
    </div>
    <div class="form-group">
      <label for="Des" class="form-label mt-4">รายละเอียด</label>
      <input type="text" class="form-control" name="Des" id="Des" aria-describedby="emailHelp" placeholder="Enter Description">
      <small id="emailHelp" class="form-text text-muted">Please enter Description.</small>
    </div>
    <div class="form-group">
      <label for="Time" class="form-label mt-4">เวลา</label>
      <input type="time" class="form-control" name="Time" id="Time" aria-describedby="emailHelp" placeholder="Enter Time">
      <small id="emailHelp" class="form-text text-muted">Please enter Time.</small>
    </div>
    <div class="form-group">
      <label for="Date" class="form-label mt-4">วันที่</label>
      <input type="date" class="form-control" name="Date" id="Date" aria-describedby="emailHelp" placeholder="Enter Date">
      <small id="emailHelp" class="form-text text-muted">Please enter Date.</small>
    </div>
    <p>
    <button type="submit" class="btn btn-info">Add</button>
    </p>
    </form>
</body>
</html>