<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>Product</title>
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
                        <a class="nav-link active" href="selectproduct.php">Product</a>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
echo "<a class = 'badge bg-info' >Connection Complete</a>";
$sql = "SELECT  * FROM Product";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "<table border='2px' class=table 'table-hover'>";
    echo "<tr bgcolor='blueviolet'>";   echo "<th>รหัสสินค้า "; echo "</th>";echo "<th> ชื่อสินค้า: ";echo "</th>"; echo "<th> ราคาสินค้า"; echo "</th>";echo "<th> วันผลิต"; echo "</th>";
    echo "<th> วันหมดอายุ"; echo "</th>";echo "<th> สินค้าในสต็อค"; 
    echo "</tr>"; 
    while($row = $result->fetch_assoc()){
        echo "<td><a href='editpro.php?ProductID=$row[ProductID]'>".$row["ProductID"]."</td>"."</a><td>"."</a>".$row["ProductName"]."</td>"."</a><td>"."</a>".$row["Price"]
        ."</td>"."</a><td>"."</a>".$row["CDate"] ."</td>"."</a><td>"."</a>".$row["ModDate"]."</td>"."</a><td>"."</a>".$row["Deleted"]."</td>";
        echo "</tr>"."<br>";    
        
        
    }
    echo "</table>";
}
    else {
        echo "0 results";
    }
    echo "<br>";
    echo "<a class = 'btn btn-light' href='insertpro.php'>Add New Product</a>";

    $conn->close();


?>
</html>