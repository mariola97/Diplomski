<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Responsive table with flexbox</title>
  <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Projekt web alati</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" />
  
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
</head>

<body  style="background-color: #f8f9fa;">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top text-white"  id="mainNav" style ="background-color: rgba(0, 0, 0, 0.50);  " >

            
            <div class="container"  >
                <a  class="navbar-brand" href="#page-top"  ><img   src="" alt=""  /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse text-white" id="navbarResponsive" >
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 text-white " >
                        <li class="nav-item"><a class="nav-link" href="./index.php#usluge">Usluge</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#bestbuy">Best buy</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#vijesti">Vijesti</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#usporedba">Usporedba</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#kupovina">Kupovina</a></li>
                        <li class="nav-item"><a class="nav-link" href="./index.php#contact">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="./narudzbe.php">Narudžbe</a></li>

                        <li class="nav-item "><a class="nav-link text-warning text-decoration" href = "logout.php">Odjavi se</a> </li>
                    </ul>
                </div>
            </div>
        </nav>

<?php
session_start();
if(!isset($_SESSION['kor_ime'])){
    
    header("location:login.html");
 }

$username="root";
$password="";
$server="localhost";
$dbname="web_trgovina";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn==false){
    die ("Greška ");
}else{
}
$kor_ime= $_SESSION['kor_ime'];
$sql= "SELECT id FROM `users` WHERE username LIKE '%$kor_ime'";

  




$result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);

if($rows>0){
   
    while ($row =mysqli_fetch_assoc($result)){
        $customer_id=$row["id"];
        
    }
    
    $sql2= "SELECT * FROM `orders` WHERE customer_id LIKE '%$customer_id'";
    $result2 = mysqli_query($conn,$sql2);
    $rows2 = mysqli_num_rows($result2);
    if($rows2>0){ 

      echo'  <table align="center" class="table" style="width: 60%; margin-top: 7%;" >
        <thead class="thead-light">
          <tr>
            <th scope="col">Broj narudžbe</th>
            <th scope="col">Model</th>
            <th scope="col">Datum narudžbe</th>
            <th scope="col">Kolicina</th>
            <th scope="col">Način plačanja</th>
            <th scope="col">Cijena</th>
          </tr>
        </thead>
        <tbody> ' ;



        while ($row =mysqli_fetch_assoc($result2)){
            $model=$row["model"];
            $id=$row["order_id"];
        $product_id=$row["product_id"];
        $date_of_order=$row["date_of_order"];
        $quantity=$row["quantity"];
        $paying=$row["paying"];
        $customer_id=$row["customer_id"];
        $total_price=$row["total_price"];

        echo "<tr>";
        echo "<th scope='row'>". $id . "</th>";
        echo "<td>" . $model . "</th>";
        echo "<td>" . $date_of_order . "</th>";
        echo "<td>" . $quantity . "</th>";
        echo "<td>" . $paying . "</th>";
        echo "<td>" . $total_price . "</th>";
        echo "<tr>" ;

        }
        
        echo "</tbody>";
        echo "</table>";
      
      }}
?>





<!-- Contact-->

<!-- Footer-->
<footer class="footer py-5  fixed-bottom" >
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start">Copyright &copy; Luka Mario Ivan</div>
          <div class="col-lg-4 my-3 my-lg-0">
              <a class="btn btn-dark btn-social mx-2 " href="https://www.instagram.com/mario_maglica/?hl=hr"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/danic.17/?hl=hr"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ivanmatic023/?hl=hr"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-lg-4 text-lg-end">
              <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
              <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
      </div>
  </div>
</footer>

 
  
  
</body>
</html>
