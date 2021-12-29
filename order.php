<?php
session_start();
if(!isset($_SESSION['kor_ime'])){

header("location:login.html");
}
$username="root";
$pass="";
$dbname="web_trgovina";
$server="localhost";
$con=mysqli_connect($server,$username,$pass,$dbname);




$sql1="INSERT INTO `orders` (`order_id`, `product_id`, `date_of_order`, `model`, `quantity`, `paying`, `customer_id`, `total_price`) VALUES (NULL, '5', '2021-06-25', 'Iphone 12 PRO MAX', '1', 'Gotovina', '1', '552');";
$sql2="SELECT * FROM orders";

$result=mysqli_query($con,$sql1);

$result2=mysqli_query($con, $sql2);


$redak=(mysqli_num_rows($result2));
echo ("broj redaka je:".$redak);






while($row=mysqli_fetch_assoc($result2)){
    echo "<table border='2'>";
    echo "<tr><td>".$row['product_id']."</td></tr>";
    echo "<tr><th>Kolicina</th><td>".$row['quantity']."</td></tr>";
    echo "</table>";}


mysqli_close($con);




?>