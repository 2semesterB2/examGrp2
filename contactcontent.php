
<main>

    <div class="row">
       <nav class="breadcrumb"> <!-- Breadcrumb til den aktuelle side -->
            <a class="breadcrumb-item" href="index.php">Forside</a>
            <a class="bread-crumb-item active before" href="contact.php">Kontakt</a>
        </nav>
       
		<h1 class="kontakttitle text-uppercase"><b>HAR DU BRUG FOR HJÆLP?</b></h1>
        <div class="col-md-6">
        
            <p>Så send en mail til os på kontaktformularen eller ring til os på: <a href="tel:+4522231229">+45 22 23 12 29</a>
            <br>Du kan ringe til os i hverdagene mellem 09:00-16:00. </p>
               
        <h3>Vil du finde en forhandler?</h3>
            <p>Du kan finde en liste over vores forhandlere <a href="error.php">her</a></p>
       	
            <p>Alt hvad vi laver hos ROOTS er med DIG i fokus, derfor hører vi meget gerne, hvordan DU synes vi kan gøre det endnu bedre. Så svarer vi tilbage så hurtigt vi kan!</p>
       	
        
        <h3>Her finder du os</h3>
            <p class="adresseboks"> 
                Adresse:<br>
                Helsingforsgade 27 <br>
                8200 Aarhus N <br>

                <a href="tel:+4522231229">+45 22 23 12 29</a>
            </p>
        
        
        </div>
        
        <!-- kontaktformular fra https://bootsnipp.com/snippets/featured/simplest-contact-form -->
        
        <div class="col-md-6">
            
            <div class="well well-sm">
                  
                <form class="form-horizontal" action="contactform.php" method="post">
          
               <!-- Overskriften -->
                <legend class="text-center">Skriv en besked til os!</legend>
    
                <!-- Navn input -->
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="name">Navn</label>
                        <input id="name" name="name" type="text" placeholder="Dit navn" class="form-control">
                    </div>
                </div>

                <!-- Email input -->
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="email">Din e-mailadresse</label>
                        <input id="email" name="email" type="text" placeholder="Din e-mailadresse" class="form-control" required>
                      </div>
                </div>

                <!-- Beskedfelt  -->
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label" for="message">Din besked</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Skriv din besked her ..." rows="5"></textarea>
                      </div>
                </div>
    
                <!-- Knap til at sende besked -->
                <div class="form-group">
                    <div class="col-md-12 text-center">
				        <button type="submit" name="submit">Send Besked</button>
                    </div>
                </div>

              </form>
            
            </div>
      </div>

    </div>
        
    <!-- Billeder af medarbejderne -->
    <h2 class="titletekst text-uppercase">HOLDET BAG ROOTS</h2>          
    <div class="row">
    	
        <div class="col-sm-2 col-md-2 col-lg-2 profilbillede">
 			<img src="images/christian-profil.jpg" class="imgfit circle" alt="Christian Jakobsen, Salgsdirektør og Partner">
 			<br><br>
			<p>Christian Jakobsen</p>
 			<p>Salgsdirektør og Partner</p>
 			<a href="mailto:cj@roots.com">cj@roots.com</a>
 		</div>
 		
        <div class="col-sm-2 col-md-2 col-lg-2 profilbillede">
 			<img src="images/josefine-profil.jpg" class="imgfit circle" alt="Josefine Østerby, Direktør">
 			<br><br>
 			<p>Josefine Østerby</p>
 			<p>Direktør</p>
 			<a href="mailto:jo@roots.com">jo@roots.com</a>
 		</div>
 		
        <div class="col-sm-2 col-md-2 col-lg-2 profilbillede">
 			<img src="images/louise-profil.jpg" class="imgfit circle" alt="Louise Ullmann, Design Manager">
 			<br><br>
 			<p>Louise Ullmann</p>
 			<p>Design Manager</p>
 			<a href="mailto:lsu@roots.com">lsu@roots.com</a>
 		</div>
 		
        <div class="col-sm-2 col-md-2 col-lg-2 profilbillede">
 			<img src="images/mathias-profil.jpg" class="imgfit circle" alt="Mathias Switzer, Salgs Manager">
 			<br><br>
 			<p>Mathias Switzer</p>
 			<p>Salgs Manager</p>
 			<a href="mailto:ms@roots.com">ms@roots.com</a>
 		</div>
 		
        <div class="col-sm-2 col-md-2 col-lg-2 profilbillede">
 			<img src="images/cecilie-profil.jpg" class="imgfit circle" alt="Cecilie Buch Golczyk, Brand Strategiker">
 			<br><br>
 			<p>Cecilie Buch Golczyk</p>
 			<p>Brand Strategiker</p>
 			<a href="mailto:cbg@roots.com">cbg@roots.com</a>
 		</div>	
 	</div>    
        


</main>