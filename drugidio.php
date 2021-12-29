<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
      <link href="css/style.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
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
<section class="page-section bg-light" id="usporedba">
            <div class="container">
            <div class="row" style="padding-top:4em;">
                    <div class="col-md-7 mx-auto text-center text-black bg-dark " style="background-color:#80c7cf00 !important">
                      <h1 class="text-center italic" >  </h1>
                      <h2>Odaberite modele telefona</h2>
                    </div>
                  </div>
                  <hr>


                  <div class="row">
                    <div class="col-md-12 mx-auto">
                      <div class="p-3 bg-dark text-black" style="background-color:#80c7cf00 !important">
              
                <div class="text-center">


    <form action="usporedba.php" method="post">
    <div class="row">
      <div class="col" style ="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;";>
      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="prvi" name="mobitel1">
     
    <?php

$username="root";
$password="";
$server="localhost";
$dbname="web_trgovina";


$telefon1 = $_GET["telefon1"];
$telefon2= $_GET["telefon2"];
$conn = mysqli_connect($server,$username,$password,$dbname);

echo" <br>";
if($conn==false){
    die ("Greška ");
}else{
    echo"Spojeno";
}
$sql1="SELECT * FROM `products` WHERE brand_id= 1 ";
$sql2="SELECT * FROM `products` WHERE brand_id= 2 ";
$sql3="SELECT * FROM `products` WHERE brand_id= 3 ";
$sql4="SELECT * FROM `products` WHERE brand_id= 4 ";
switch ($telefon1) {
    case "samsung":
        $result = mysqli_query($conn,$sql1);
        break;
    case "apple":
        $result = mysqli_query($conn,$sql3);
      break;
    case "oneplus":
        $result = mysqli_query($conn,$sql2);
      break;
      case "xiaomi":
        $result = mysqli_query($conn,$sql4);
      break;
      
    default:
      echo "GREŠKA";
      }
    
  
      

$rows = mysqli_num_rows($result);

if($rows>0){
  

while ($row =mysqli_fetch_assoc($result)){
    $model=$row["model"];
    echo '<option value="'.$model.'">'.$model.'</option>';
   
   
 


}

}
mysqli_close($conn);
?>
   </select>
           
          
   <div class="col" style ="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;";>
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="prvi" name="mobitel2">
     </div>
<?php

$username="root";
$password="";
$server="localhost";
$dbname="web_trgovina";


$telefon1 = $_GET["telefon1"];
$telefon2= $_GET["telefon2"];
$conn = mysqli_connect($server,$username,$password,$dbname);

echo" <br>";
if($conn==false){
    die ("Greška ");
}else{
    echo"Spojeno";
}
$sql1="SELECT * FROM `products` WHERE brand_id= 1 ";
$sql2="SELECT * FROM `products` WHERE brand_id= 2 ";
$sql3="SELECT * FROM `products` WHERE brand_id= 3 ";
$sql4="SELECT * FROM `products` WHERE brand_id= 4 ";
switch ($telefon2) {
    case "samsung":
        $result = mysqli_query($conn,$sql1);
        break;
    case "apple":
        $result = mysqli_query($conn,$sql3);
      break;
    case "oneplus":
        $result = mysqli_query($conn,$sql2);
      break;
      case "xiaomi":
        $result = mysqli_query($conn,$sql4);
      break;
      
    default:
      echo "GREŠKA";
      }
    
  
      

$rows = mysqli_num_rows($result);

if($rows>0){
  

while ($row =mysqli_fetch_assoc($result)){
    $model=$row["model"];
    
    echo '<option value="'.$model.'">'.$model.'</option>';
   


}

}
mysqli_close($conn);
?>
</select>
<button type="submit" type="button" class="btn btn-primary" style="width: 150px; font-size: 15pt;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" >Usporedi</button>
    </form>


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