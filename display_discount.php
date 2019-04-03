<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produc = $_POST["produc"];
    $price = $_POST["price"];
    $discount = $_POST["discount"]."%";
    $DiscountAmount = $price *$discount*0.01*0.1;
    $DiscountPrice = $price - $DiscountAmount;

    echo "product : $".$produc."<br>";
    echo "price : ".$price."<br>";
    echo "discount : $".$discount."<br>";
    echo "DiscountAmount ".$DiscountAmount."<br>";
    echo "Discount Price = $".$DiscountPrice;
}
?>