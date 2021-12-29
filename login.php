<?php
	session_start();
	
	
   $DB_SERVER='localhost';
   $DB_USERNAME='root';
   $DB_PASSWORD='';
   $DB_DATABASE='web_trgovina';
   
  
   $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);

   if($db==false)
    {
        die("Greska kod spajanja!");
    }
	
	
	  $kor_ime = $_POST['kor_ime'];
      $password = $_POST['lozinka']; 
      
      $sql = "SELECT id FROM users WHERE username = '$kor_ime' and lozinka = '$password'";
	  
      $result = mysqli_query($db,$sql);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         $_SESSION["kor_ime"] = $kor_ime;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 
		 echo $error;
		 header("location: login.html");
      }
	

?>