<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Usporedba</title>
  
  
  <link rel='stylesheet prefetch' href='./table/css/egkepq.css'>

      <link rel="stylesheet" href="./table/css/style.css">
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" />

  
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
            <li class="nav-item"><a class="nav-link" href="index.php">Usluge</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Best buy</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Vijesti</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Usporedba</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Kupovina</a></li>
            <li class="nav-item"><a class="nav-link" href="index.php">Kontakt</a></li>
            <li class="nav-item"><a class="nav-link" href="narudzbe.php">Narudžbe</a></li>

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
$pass="";
$dbname="web_trgovina";
$server="localhost";
$con=mysqli_connect($server,$username,$pass,$dbname);

$curr = date("Y-m-d");
$ime=$_POST["fname"];
$prezime=$_POST["lname"];
$email=$_POST["email"];
$mobitel=$_POST["mob"];
$paying=$_POST["paying"];
$quantity=$_POST["quantity"];
$date=$_POST["date"];



$time=$_POST['time'];
$trenutno_vrijeme = date("Y-m-d");
$trenutnosec=strtotime($trenutno_vrijeme);
$narudzbasec=strtotime($date);
$razlika= $narudzbasec-$trenutnosec;
$dani = $razlika/86400;

$now = new Datetime($time);
$begintime = new DateTime('08:00');
$endtime = new DateTime('16:00');

$day =date('l',$narudzbasec);

if($trenutnosec<$narudzbasec && $dani<5 && $day!="Sunday" && ($now >= $begintime && $now <= $endtime)){



    $kor_ime= $_SESSION['kor_ime'];
    $sql= "SELECT id FROM `users` WHERE username LIKE '%$kor_ime'";
    
    
    $result = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($result);
    if($rows>0){
       
    while ($row =mysqli_fetch_assoc($result)){
        $customer_id=$row["id"];
       
        
    }



$sql="SELECT * from products where model LIKE '%$mobitel'";



$result=mysqli_query($con,$sql);








while($row=mysqli_fetch_assoc($result)){

  $model=$row["model"];

  $price=$row["price"];
  $ram=$row["RAM"];
  $storage=$row["storage"];
  $processor=$row["processor"];
  $camera=$row["camera_mp"];
  $guarantee=$row["guarantee"];
  $year=$row["year_of_manufacture"];
  $product_id = $row["product_id"];

}

$total_price =$price * $quantity;

$sql_insert="INSERT INTO `orders` (`order_id`, `product_id`, `date_of_order`, `model`, `quantity`, `paying`, `customer_id`, `total_price`) VALUES (NULL, '$product_id', '$date', '$model', '$quantity', '$paying', '$customer_id', '$total_price');";
$ubacivanje=mysqli_query($con, $sql_insert);

$result=mysqli_query($con,$sql);

?>


<div class="container" style="padding-top:9%">
  <div class="row">
    <div class="col" style = "padding-left:20%">
      
  



<p> Poštovani/a <?php echo $ime; ?>,  hvala Vam na kupovini! Ovo su Vaše osnovne informacije o proizvodu!</p>

<table class="table">

    

  <tbody>
  <tr>
      <th scope="col">Naziv</th>
      <th scope="col"><?php echo $model?></th>
     
    </tr>
    <tr>
      <th scope="row">Količina</th>
      <td><?php echo $quantity?></td>
   
    </tr>
    <tr>
      <th scope="row">Cijena</th>
      <td><?php echo $price?>KM</td>

    </tr>
    <tr>
      <th scope="row">Način plaćanja</th>
      <td><?php echo $paying?> </td>

    </tr>
    <tr>
      <th scope="row">RAM</th>
      <td><?php echo $ram?>GB</td>

    </tr>
    <tr>
      <th scope="row">Procesor</th>
      <td><?php echo $processor?> GHz</td>
    </tr>
    <tr>
      <th scope="row">Kamera </th>
      <td><?php echo $camera?> mp</td>
    </tr>
    <tr>
      <th scope="row">Garancija</th>
      <td><?php echo $guarantee?> godine</td>
    </tr>
    <tr>
      <th scope="row">Datum narudžbe</th>
      <td><?php echo $date?> </td>

    </tr>
    <tr>
      <th scope="row">Datum preuzimanja pošiljke</th>
      <td><?php echo $curr?> </td>

    </tr>
    <tr>
      <th scope="row">Ukupna cijena</th>
      <td><?php echo $quantity*$price?> KM</td>

    </tr>

  </tbody>

  
</table>
</div>
    <div class="col" style="padding-top:8%">
      


  <?php echo "<img src='assets/img/mobiteli/".$model.".jpg'width='300px'>"; ?>




 
  <?php


    }
mysqli_close($con);
}
 else { echo "<h1 style='  text-align: center; padding-top:25% ';> Radno vrijeme je od ponedjeljka do subote. Od 9 do 16h. Nedjelja je neradni dan!!"; }
?>


</div>
  </div>

 <footer class="footer py-4 fixed-bottom">
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
