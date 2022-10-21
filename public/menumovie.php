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
    <body>
    <?php
//connect to database 
$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "movie");
mysqli_query($objConnect, "SET NAMES utf8");

if($objConnect->connect_error)
{
  die("".$conn->connect_error);
}

//select data from table 
$sql = "SELECT * FROM movies";

$result = $objConnect->query($sql);

if ($result->num_rows > 0) {
    // head of table
    echo "<table class='table table-hover' border='2px'>";
    echo "<tr class='table-info'>";
    echo "<th> รหัสหนัง";echo "</th>";
    echo "<th> ชื่อหนัง";echo "</th>";
    echo "<th> รายละเอียด";echo "</th>";
    echo "<th> เวลา";echo "</th>";
    echo "<th> วันที่";echo "</th>";
    echo "<th > รายละเอียด";echo "</tr>"; 
    //output data of each row
 while($row = $result->fetch_assoc()) {
  echo 

  "<td>".$row["MovieID"]."</td>". 
  "</a><td>"."</a>". $row["Moviename"] . "</td>".
  "</a><td>"."</a>". $row["Des"] . "</td>".
  "</a><td>"."</a>". $row["Time"] . "</td>".
  "</a><td>"."</a>". $row["Date"] . "</td>".
  "<td><a class = 'btn btn-danger btn-sm'  href='editmov.php?MovieID=$row[MovieID]'>"."แก้ไข"."</td>";
  echo "</tr>"."<br>";

  }
  echo "</table>";
}
else {
    echo "0 results";
  }

  //menu add data to table
  echo "<br> <a class = 'btn btn-info' href='inmov.php'>Add</a>";

  $objConnect->close();
?>
</html>