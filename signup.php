<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Projekt web alati</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <header class="masthead" style="background-size: cover;">
            <div class="container">
    <section class="page-section" id="usluge">
            <div class="container">
                <div class="text-center">
                <h2 class="section-heading text-uppercase">
            
        
<?php
	$server="localhost";
    $dbname="web_trgovina";
    $user="root";
    $pass="";

    $con=mysqli_connect($server,$user,$pass, $dbname);

    if($con==false)
    {
        die("Greska kod spajanja!");
    }
	$ime=$_POST['ime'];
    $prez=$_POST['prezime'];
    $user=$_POST['kor_ime'];
	$pass=$_POST['lozinka'];
    
	if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $pass)) { 
        echo "ispravna lozinka, ";
        $sql="INSERT INTO users (id,ime,prezime,username,lozinka,contact) VALUES('','".$ime."','".$prez."','".$user."','".$pass."','')";
        $result=mysqli_query($con,$sql);
        echo "Uspješna registracija <br><a href='login.html'>Klikni ovdje da se prijaviš sa svojim računom!</a></h2>";}
       	
        else echo("Neispravna lozinka, mora sadržavati znakove i broj te između 8 i 12 znakova!  Nije uspješna registracija <br><a href='signup.html'>Klikni ovdje da se registriraš ponovno!</h2></a>");
	 
	
  

  
		mysqli_close($con);

?>

    </div>
    </div>
    </section>
    </div>
    </header>


    </body>
    </html>