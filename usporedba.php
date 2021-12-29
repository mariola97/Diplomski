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

$username="root";
$password="";
$server="localhost";
$dbname="web_trgovina";


$telefon1 = $_POST['mobitel1'];
$telefon2= $_POST['mobitel2'];
$conn = mysqli_connect($server,$username,$password,$dbname);

echo" <br>";
if($conn==false){
    die ("Greška ");
}else{
    
}
$sql1="SELECT * FROM `products` WHERE model LIKE '%$telefon1'";
$sql2="SELECT * FROM `products` WHERE model LIKE '%$telefon2'";
$result = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);
$rows = mysqli_num_rows($result);
$rows2 = mysqli_num_rows($result2);
if($rows>0){
    echo "<table border='2px '>";
    
    
while ($row =mysqli_fetch_assoc($result)) {
    $model1=$row["model"];

    $price1=$row["price"];
    $ram1=$row["RAM"];
    $storage1=$row["storage"];
    $processor1=$row["processor"];
    $camera1=$row["camera_mp"];
    $guarantee1=$row["guarantee"];
    $year=$row["year_of_manufacture"];

   
   
}
while ($row =mysqli_fetch_assoc($result2)){
    $model2=$row["model"];

    $price2=$row["price"];
    $ram2=$row["RAM"];
    $storage2=$row["storage"];
    $processor2=$row["processor"];
    $camera2=$row["camera_mp"];
    $guarantee2=$row["guarantee"];
    $year2=$row["year_of_manufacture"];


}


}

?>

  <div class="table" ">


  <div class="table-cell"></div>
  <div class="table-cell plattform">
    <h3><?php echo $model1?></h3>
    <?php echo "<img src='assets/img/mobiteli/".$model1.".jpg'width='140'>"; ?>
  </div>
  <div class="table-cell plattform" style="border: solid white 1px" >
    <h3><?php echo $model2?></h3>
    <?php echo "<img src='assets/img/mobiteli/".$model2.".jpg'width='140'>"; ?>
  </div>



  <div class="table-cell cell-feature">Naziv mobitela</div>
  <div class="table-cell"> <?php echo $model1?></div>
  <div class="table-cell"> <?php echo $model2?>  </div>


  <div class="table-cell cell-feature">Godina proizvodnje</div>
  <div class="table-cell"> <?php echo $year ?></div>
  <div class="table-cell"> <?php echo $year2?>  </div>
  

  
  <div class="table-cell cell-feature">RAM</div>
  <div class="table-cell"> <?php echo $ram1?> </div>
  <div class="table-cell"> <?php echo $ram2?>   </div>
  


  
  <div class="table-cell cell-feature">Prostor</div>
  <div class="table-cell"> <?php echo $storage1?> </div>
  <div class="table-cell"> <?php echo $storage2?>   </div>
  


  
  <div class="table-cell cell-feature">Procesor</div>
  <div class="table-cell"> <?php echo $processor1?> </div>
  <div class="table-cell"> <?php echo $processor2?>   </div>

  <div class="table-cell cell-feature">Kamera (MP)</div>
  <div class="table-cell"> <?php echo $camera1?> </div>
  <div class="table-cell"> <?php echo $camera2?>   </div>

  <div class="table-cell cell-feature">Garancija </div>
  <div class="table-cell"> <?php echo $guarantee1?> </div>
  <div class="table-cell"> <?php echo $guarantee2?>   </div>


  <div class="table-cell cell-feature">Cijena </div>
  <div class="table-cell"> <?php echo $price1?> </div>
  <div class="table-cell"> <?php echo $price2?>   </div>

  <div class="table-cell"></div>
  <div class="table-cell plattform">
    <h3></h3>
    <a href="index.php#kupovina" class="btn">Naruči mobitel</a>
    <h3></h3>

  </div>
  <div class="table-cell plattform">
    <h3></h3>

    <a href="index.php" class="btn">Vrati nazad</a>
    <h3></h3>

  </div>

</div>
  
  <?php

mysqli_close($conn);

?>
 <footer class="footer py-4">
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
