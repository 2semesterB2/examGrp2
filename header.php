
<!-- Vi benytter en php include til vores header. Her definerer vi variablerne "c", så vi kan definere den aktuelle side i koden til den pågældende side -->

<?php 
    $c1="";
    $c2="";
    $c3="";
    $c4="";

    if ($current==1) {$c1 ="class='current'";}; 
    if ($current==2) {$c2 ="class='current'";}; 
    if ($current==3) {$c3 ="class='current'";}; 
    if ($current==4) {$c4 ="class='current'";}; 
?>



<!-- Bootstraps header og navigationsbar -->

<nav class="navbar navbar-default navbar-fixed-top">
  
    <div class="container-fluid">   <!-- Container-fluid fylder hele viewporten -->
    
      <div class="row topbar">  <!-- Topbar med sociale medier, tekst og sprogbilleder -->
          
          <div id="topsome" class="col-sm-4 col-md-4 col-lg-4 col-xl-4">    <!-- Sociale medier -->
                <a href="https://www.facebook.com/plinthit/" target="_blank">
          	        <img src="images/facebookheader.png" alt="Facebook" class="someheader">
          	    </a>
          	    <a href="https://www.instagram.com/plinthitdk/" target="_blank">
          	        <img src="images/instagramheader.png" alt="Instagram" class="someheader">
          	    </a>
          	    <a href="https://www.linkedin.com/company/4835723/" target="_blank">
          	        <img src="images/linkedinheader.png" alt="Linkedin" class="someheader">
          	    </a>
          </div>
          
          <div id="toptekst" class="col-sm-5 col-md-5 col-lg-5 col-xl-5">
              <p>Altid gratis fragt til pakkeshop // <a href="forhandler.php"> Find forhandler</a></p>
          </div>
          
          <div id="topsprog" class="col-sm-3 col-md-3"> <!-- Links til de øvrige domæner -->
              <a href="error.php">
                  <img class="topsprogbillede" src="images/uk.png" alt="English">
              </a>
              <a href="error.php">
                  <img class="topsprogbillede" src="images/de.png" alt="Deutsch">
              </a>
              <a href="error.php">
                  <img class="topsprogbillede" src="images/es.png" alt="Español">
              </a>
          </div>
          
      </div>
      
      
        
    <!-- Navbar-brand og navbar-toggle sættes sammen for at sikre at det bliver responsivt - logoet ligger derfor her sammen med burgermenuen -->
    
    <div class="navbar-header">
        
        <!-- Burgermenu -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Navigation</span>
            <span class="icon-bar"></span> <!-- De tre streger i burgermenuen -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="index.php">
            <img id="logo" src="images/logo2.png" alt="ROOTS Parasolbase">
        </a>
        
    </div>
    
        
    <!-- Navigationsbaren til større skærme - her bruger vi ovenstående variabler -->
      
    <div class="collapse navbar-collapse text-uppercase" id="bs-example-navbar-collapse-1">
    
        <?php
            echo "
                <ul class='nav navbar-nav navbar-right'>
                    <li $c1><a href='index.php'>Forside</a></li>
                    <li $c2><a href='blog.php'>Blog</a></li>
                    <li $c3><a href='contact.php'>Kontakt</a></li>
                    <li $c4><a href='error.php'><img id='kurv' src='images/kurv.png' alt='Indkøbskurv'></a></li>
                </ul>
            "
        ?>
      
    </div>
        
  </div>
</nav>
    	