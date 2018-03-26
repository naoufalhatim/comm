
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>C.Investis</title>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style.css" />

	
	</head>
	<body>
		<div class="header">
		<img class="montp" src="images/img11.png" />
		<div class="head01">
			<div id="img1" class="head01">
				<a href="index.php" target="_blank"><img class="logo" src="images/INVESTIS_logo.png" alt="C.investis logo" /></a>
				
			</div>
			
		</div>
		</div>
		
			<div class="h-body">
			<div id="intro" class="h-body1">
											C'est ici on vous aide à traçer votre réussite!
			</div>
			
			<div class="h-body2"><iframe class="vid" src="https://youtube.com/embed/HTgMVEKU4fI"></iframe> 
      </div>

			
      <div class="form">
      
        <ul class="tab-group">
        <li class="tab active"><a href="#signup">Inscrpition</a></li>
        <li class="tab"><a href="#login">Se connecter</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Inscription gratuite !</h1>
          
          <form id="myForm" action="register.php" method="GET"  enctype="multipart/form-data">
          
          <div class="top-row">
            <div class="field-wrap">
              <label class="label1">
                Votre prénom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="n" <?php if (!empty($_GET['n'])) {echo "value=\"" . $_GET["n"] . "\"";} ?> >
            </div>
        
            <div class="field-wrap">
              <label class="label1">
                Votre nom<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="p" <?php if (!empty($_GET['p'])) {echo "value=\"" . $_GET["p"] . "\"";} ?> >
            </div>
          </div>

          <div class="field-wrap">
            <label class="label1">
              Adresse e-mail<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="mail" <?php if (!empty($_GET['mail'])) {echo "value=\"" . $_GET["mail"] . "\"";} ?> >
          </div>
          
          <div class="field-wrap">
            <label class="label1">
              Mot de passe<span class="req">*</span>
            </label>
            <input id="mdp" type="password"required name="mdp" autocomplete="off"/>
            <span  class="tooltip">Le mot de passe ne doit pas faire moins de 6 caractères</span>
          </div>

          <div class="field-wrap">
            <label class="label1">
              Confirmer votre mot de passe<span class="req">*</span>
            </label>
            	 <input id="mdp1" type="password"required name="mdp1" autocomplete="off"/>
            	 <span class="tooltip">Le mot de passe de confirmation doit être identique à celui d'origine</span>
          </div>
          
          <input value="Créer un compte" type="submit" class="button button-block"/>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bienvenue!</h1>
          
          <form action="connecter.php" method="GET">
          
            <div class="field-wrap">
            <label class="label1">
              Adresse e-mail<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="mail" value="<?php if(isset($_GET['mail'])) echo $_GET['mail']; ?>"/>
          </div>
          
          <div class="field-wrap">
            <label class="label1">
              Votre mot de passe<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="mdp" />
            
          </div>
          
          <p class="forgot"><a href="#">Mot de passe oublié ?</a></p>
          
          <button class="button button-block"/>Connexion</button>
          
          </form>

        </div>
        
      </div>
      
</div> 
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>
		
	 </div>
													 
					<footer class="footer2">
						
							<div class="social-navigation">
							
										<span class="copyright">Rejoignez-nous :</span></br>
											<img  src="images/twitter-logo.png" alt="insta" width="40"><a href="https://twitter.com/"><span> Twitter</span></a>
											<img src="images/insta.png" alt="insta" width="40"/><a href="https://www.instagram.com/"><span>Instagram</span></a>				
	               			</div>
	               					<div class="copyright">
										Design by Hatim Naoufal & Soufiane SADDOUK.© 2018 Copyright Text
									</div>
						</footer>

		</body>
		</html>