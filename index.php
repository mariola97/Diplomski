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
        <?php
    session_start();
  if(!isset($_SESSION['kor_ime'])){
	  
      header("location:login.html");
   }
    ?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top text-white"  id="mainNav" style ="background-color: rgba(0, 0, 0, 0.50);  " >

            
            <div class="container"  >
                <a  class="navbar-brand" href="#page-top"  ><img   src="" alt=""  /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse text-white" id="navbarResponsive" >
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0 text-white " >
                        <li class="nav-item"><a class="nav-link" href="#usluge">Usluge</a></li>
                        <li class="nav-item"><a class="nav-link" href="#bestbuy">Best buy</a></li>
                        <li class="nav-item"><a class="nav-link" href="#vijesti">Vijesti</a></li>
                        <li class="nav-item"><a class="nav-link" href="#usporedba">Usporedba</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kupovina">Kupovina</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="./narudzbe.php">Narudžbe</a></li>

                        <li class="nav-item "><a class="nav-link text-warning text-decoration" href = "logout.php">Odjavi se</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Dobrodošli u naš MobileShop!</div>
                <div class="masthead-heading text-uppercase">DIGIPHONE</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#usluge">Pogledaj više!</a>
            </div>
        </header>
        <section class="page-section" id="usluge">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Usluge</h2>
                    <p class="section-subheading text-muted" style="font-size: medium; font-style: italic;"> Možda već duže vrijeme gledaš najnoviji model i zanima te gdje ga kupiti po najnižoj cijeni? Jesu li klinci poželjeli novi mobitel, a vi niste sigurni koji im izabrati? Ako ste na barem jedno od ovih pitanja potvrdno odgovorili, prije konačnog odabira novog pametnog telefona provjerite zanimljivu ponudu i u mnoštvu različitih pametnih telefona izaberite najbolji.</p>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">SHOP</h4>
                        <p class="text-muted">Kod nas možete provjeriti i ponudu 5G telefona, mobitela s različitim stupnjem vodootpornosti, s utorom za slušalice ili bez njega, s mogućnošću bežičnog punjenja, IPS ili OLED zaslonom i brojnim drugim atributima koji se mogu pronaći kod pametnih telefona.</p>
                    </div>
                  
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">USPOREDBA</h4>
                        <p class="text-muted">Ako tražite dobar mobitel koji odgovara vašem proračunu i zahtjevima, na pravom ste mjestu. Usporedite detaljne specifikacije mobilnih telefona, pametnih telefona i tableta jednu do druge. Pronađite koji je za vas!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-light" id="bestbuy">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Best buy</h2>
                    <h3 class="section-subheading text-muted">Ovi mobiteli su trenutno BEST BUY</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/best/10.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption" >
                                <div class="portfolio-caption-heading" style="text-align: center; font-size: 16pt; " >Samsung</div>
                                <div class="portfolio-caption-subheading text-muted" style="text-align: center;  ">A72</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/best/20.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading " style="text-align: center; font-size: 16pt;" >Xiaomi </div>
                                <div class="portfolio-caption-subheading text-muted" style="text-align: center;  ">  Mi Note 10 Lite</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/best/30.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading" style="text-align: center; font-size: 16pt;" >Apple</div>
                                <div class="portfolio-caption-subheading text-muted" style="text-align: center;  "> iPhone SE</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="page-section" id="vijesti">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Vijesti</h2>
                    <h3 class="section-subheading text-muted">Vijesti koje bi Vas mogle zanimati!</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vijesti/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="font-style: italic;">Android</h4>
                                <h4 class="subheading">Huawei P50 serija stiže sa Snapdragonom 888 4G?!</h4>
                            </div>
                            <div class="timeline-body" style="text-align: justify;"><p class="text-muted">Jučer se inače pojavila informacija koja navodi da će Huawei P50 serija biti predstavljena krajem sljedećeg mjeseca, tačnije 29.07.2021. godine. Pored mogućeg datuma predstavljanja, navodi se da će Huawei P50 serija uključivati tri modela i to Huawei P50, Huawei P50 Pro i Huawei P50 Pro Plus koji će stići kao direktni nasljednici Huawei P40, Huawei P40 Pro i Huawei P40 Pro Plus telefona.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vijesti/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="font-style: italic;">Android</h4>
                                <h4 class="subheading">Procurili detalji o kamerama Galaxy S22 serije – Ništa od trocifrenih megapiksela</h4>
                            </div>
                            <div class="timeline-body" style="text-align: justify;"><p class="text-muted">Početkom ove godine Samsung je predstavio Samsung Galaxy S21 seriju. Ona je predstavljena nešto ranije nego što je inače Samsung predstavljao svoju Galaxy S seriju, a uključuje tri modela – Samsung Galaxy S21, Samsung Galaxy S21 Plus i Samsung Galaxy S21 Ultra. Nasljednici ovih telefona stići će početkom sljedeće godine, a ponovo se pojavljuju neki detalji o Samsung Galaxy S22 seriji.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vijesti/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="font-style: italic;">IOS</h4>
                                <h4 class="subheading">Ipak ništa od 1 TB za iPhone 13 modele, LiDAR senzor samo kod Pro modela</h4>
                            </div>
                            <div class="timeline-body" style="text-align: justify;"><p class="text-muted">Još jednu suprotnost u odnosu na ranije izvještaje donosi TrendForce. Naime, ranije se nagađalo da će Pro inačice predstojeće iPhone serije imati mogućnosti pohrane do 1 TB, no sada TrendForce prenosi da se to zapravo neće desiti, nego da će oba imati maksimalnu mogućnost pohrane od 512 GB, koliki je i sada maksimalni kapacitet unutrašnje memorije.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/vijesti/40.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 style="font-style: italic;">Android</h4>
                                <h4 class="subheading">OnePlus Nord CE 5G stigao u Evropu – Evo cijena!
                                </h4>
                            </div>
                            <div class="timeline-body" style="text-align: justify;"><p class="text-muted">OnePlus Nord CE 5G u Evropi je moguće kupiti preko OnePlusovog sajta oneplus.com, a telefon je dostupan u dvije verzije 8/128 GB i 12/256 GB. Prva verzija košta 330 EURA, dok druga verzija košta 400 EURA. Telefon inače ima i verziju 6/128 GB koja košta 300 EURA, no trenutno ova verzija telefona nije dostupna.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Uskoro
                                <br />
                                Više
                                <br />
                                Priča!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Usporedba-->
        <section class="page-section bg-light" id="usporedba">
            <div class="container">
                <div class="row" style="padding-top:4em;">
                    <div class="col-md-7 mx-auto text-center text-black bg-dark " style="background-color:#80c7cf00 !important">
                      <h1 class="text-center italic" >  </h1>
                      <h2>Usporedi mobitele za lakšu kupovinu</h2>
                    </div>
                  </div>
                  <hr>
              
    <!-- <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>










 <select class="form-select" aria-label="Default select example" id="prvi" name="prvi">
                              <option  value="samsung" selected>Samsung</option>
                              <option value="apple">Apple</option>
                              <option value="oneplus">OnePlus</option>
                              <option value="xiaomi">Xiaomi</option>
                            </select>



-->

                  
                  <div class="row">
                    <div class="col-md-12 mx-auto">
                      <div class="p-3 bg-dark text-black" style="background-color:#80c7cf00 !important">
              
                <div class="text-center">
                    <form role="form" action="drugidio.php" method="GET">

            
                        <div class="row">
                            <div class="col" style ="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;";>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="prvi" name="telefon1">
                            <option  value="samsung" selected>Samsung</option>
                              <option value="apple">Apple</option>
                              <option value="oneplus">OnePlus</option>
                              <option value="xiaomi">Xiaomi</option>
                                </select>
                                                            </div>


                            
                            <div class="col" style ="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;";> 
                            <select class="form-select form-select-lg mb-3 " aria-label=".form-select-lg Montserrat" name="telefon2" id="drugi">
                            <option  value="samsung" selected>Samsung</option>
                              <option value="apple">Apple</option>
                              <option value="oneplus">OnePlus</option>
                              <option value="xiaomi">Xiaomi</option>
                                </select>
                                                            </div>
                        </div>
                        
                            <button type="submit" type="button" class="btn btn-primary" style="width: 150px; font-size: 15pt;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" >Usporedi</button>
                          </div>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
                
            </div>
        </section>


        <!-- Kupovina-->

        <section class="page-section bg-light" id="kupovina">
            <div class="container">
                <div class="row align-items-center">
                    <div class="container" style ="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    
                        <div class="row" style="padding-top:4em;">
                          <div class="col-md-7 mx-auto text-center text-black bg-dark" style="background-color:#493d3b00 !important">
                            <h1 class="text-center" >  </h1>
                            <h2>Kupi najnoviji mobitel na tržištu za najmanju cijenu</h2>
                          </div>
                        </div>
                        <hr>
                    
                        <div class="row">
                          <div class="col-md-7 mx-auto">
                            <div class="p-3 bg-dark text-black" style="background-color:#493d3b00 !important">
                    
                              <form method="POST" action="kupovina.php">
                    
                                <h4>Osobni podaci:</h4>
                                <hr>

                                
                                <div class="col-md-12">
                            <div class="form-group">
                                <!-- Ime-->
                                <input class="form-control" name = "fname" id="fname" type="text" placeholder="Vaše ime: *" data-sb-validations="required" required/>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Ime je neophodno.</div>
                            </div> <br>

                            <div class="form-group">
                                <!-- Prezime-->
                                <input class="form-control" id="lname" name = "lname" type="text" placeholder="Vaše prezime: *" data-sb-validations="required" required/>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Prezime je neophodno.</div>
                            </div> <br>

                            <div class="form-group">
                                <!-- Email -->
                                <input class="form-control" id="email" type="email" name="email" placeholder="Vaš e-mail: *" data-sb-validations="required,email"required />
                                <div class="invalid-feedback" data-sb-feedback="email:required">e-mail je neophodan!</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">e-mail nije pravilno napisan!</div>
                            </div>
                            <br>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone1" type="tel" name ="mob" placeholder="Vaš broj *" data-sb-validations="required" required/>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Broj telefona  je neophodan!</div>
                            </div>
                        </div>
                        <br>





                             
                    
                                <h4>Ponuda:</h4>
                                <hr>
                                
                                <?php
                                $username="root";
                                $pass="";
                                $dbname="web_trgovina";
                                $server="localhost";
                                $con=mysqli_connect($server,$username,$pass,$dbname);
                               
                                $sql="SELECT model FROM `products`";
                                $result=mysqli_query($con,$sql);
                                
                                $retci=mysqli_num_rows($result);
                              
                                if($retci>0){
                                    
                                
                                echo'<div class="form-group row">';
                                  echo '<label class="col-form-label col-md-3" for="mob">Odaberite model</label>';
                                  echo '<div class="col-md-6">';
                                    echo '<select class="form-control" id="mob" name="mob">';
                                    while ($row=mysqli_fetch_assoc($result)){
                                      echo '<option>'.$row['model'].'</option>';}
                                    echo '</select>';
                                  echo '</div>';
                                echo '</div>';}
                                mysqli_close($con);
                                ?>
                                <br>

                                <div class="form-group row">
                                  <label for="quantity" class="col-md-3 col-form-label">Količina(1-5):</label>
                                  <div class="col-md-2">
                                    <input class="form-control" type="number" id="quantity" name="quantity" min="1" max="5" value="1">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label">Način plaćanja</label>
                                  <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                    
                                      <input class="form-check-input" type="radio" name="paying" value="visa" id="visa" checked="checked" />
                                      <label class="form-check-label" for="visa">Visa</label>
                    
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="paying" value="mastercard" id="mastercard" />
                                      <label class="form-check-label" for="mastercard">Master Card</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="radio" name="paying" value="gotovina" id="Gotovina" />
                                      <label class="form-check-label" for="Gotovina">Gotovina</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="date" class="col-md-3 col-form-label">Datum i vrijeme isporuke </label>
                                  <div class="col-md-4">
                                    <input class="form-control" type="date" id="date" name="date">
                    
                                  </div> <br><br>
                                  <div class="col-md-3">
                                    <input class="form-control" type="time" name="time" min="09:00" max="16:00">
                                  </div>
                                </div>  
                                <div class="form-group row">
                                  <label class="col-md-3 col-form-label">Dodatne informacije o narudžbi</label>
                                  <div class="col-md-8">
                                    <textarea class="form-control" name="message" rows="5" cols="40" placeholder="Dodatne informacije može navesti ovdje!"></textarea>
                                  </div>
                                </div>
                                
                    
                                <hr>
                    
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <button type="reset" class="btn btn-danger ">Reset</button>
                                    <button type="button" class="btn btn-warning">Otkaži</button>
                                    <button type="submit" class="btn btn-success">Naruči</button>
                                  </div>
                                </div>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <hr>
                </div>
        </div>
</section>
<div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.samsung.com/us/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/samsung.png" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.apple.com/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/apple.svg" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.mi.com/global/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/Xiaomi.png" alt="..." /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="https://www.oneplus.com/"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/oneplus-logo.webp" alt="..." /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontaktirajte nas!</h2>
                    <h3 class="section-subheading text-muted">Ako trenutno nismo aktivni, javit ćemo Vam se u što kraćem roku!.</h3>
                </div>
                
                <form  id="contactForm" data-sb-form-api-token="API_TOKEN"  method = "POST" action ="kontakt.php">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group" >
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Vaše ime: *"  maxlength="20" name="name" required />
                                <div class="invalid-feedback" data-sb-feedback="name:required" required>Potrebno je unijeti ime.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Vaš e-mail: *"  name="email" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">e-mail je neophodan!</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">e-mail nije pravilno napisan!</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Vaš broj *" name="br" data-sb-validations="required" required />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Broj telefona  je neophodan!</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Vaša poruka: *" name="por" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Vaša poruka je neophodna!</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Podnošenje obrasca uspješno!</div>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Greška u slanju poruke!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit" value="posalji" >Pošalji!</button></div>
                   
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4 ">
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
