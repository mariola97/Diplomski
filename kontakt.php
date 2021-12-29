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
    <header class="masthead" style="height: 100vh"  >
            <div class="container">
    <section class="page-section" id="usluge">
            <div class="container">
                <div class="text-center">
                <h2 class="section-heading text-uppercase">
<?php
    $ime=$_POST['name'];
    $mail=$_POST['email'];
    $broj=$_POST['br'];
    $poruka=$_POST['por'];
  
    $file=("kontakt.txt");
        file_put_contents($file,$ime."\n".$mail."\n".$broj."\n".$poruka);
    echo "PRIMILI SMO VAŠU PORUKU<br><a href='index.php'> Povratak na aplikaciju</a>";
?>
</h2>
</div>
</div>
</section>
</div>
</header>
</body>
</html>
