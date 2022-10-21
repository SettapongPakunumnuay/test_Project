<?php
    $price_x = $_GET["x"];
    $price_y = $_GET["y"];
    $total = $price_x*$price_y;
    $vat = $total*0.07;
    $net = $total+$vat;
    echo "ราคาสินค้าต่อชิ้น $price_x<br>";
    echo "จำนวนชิ้นที่ซื้อ $price_y<br>";
    echo "ราคารวม $total<br>";
    echo "ภาษีมูลค่าเพิ่ม $vat <br>";
    echo "ราคาสุทธิ $net <br>"
?>