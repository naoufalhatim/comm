<?php 
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content-type="text/html; charset=iso-8859-1">
    <link rel="icon" href="images/INVESTIS_logo.png">
    <link rel="stylesheet" href="recherche/style_search.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>About</title>

</head>

<body>
  <div>
    <div class="header">
        <img class="montp" src="images/img11.png" />
        <div class="head01">
            <div id="img1" class="head01">
                <a href="index.php" target="_blank"><img class="logo" src="images/INVESTIS_logo.png" alt="C.investis logo" /></a>
            </div>
        </div>
    </div>

    
<div class="container">
    <div>
                <ul class="nav">
                    <li><a href="./recherche/recherche.php"><i class="icon-home icon-large"></i></a></li>
                    <li><a href="./recherche/recherche.php">Trouver ou investir </a></li> 
                    <li><a href="./avis.php"> Poster votre avis</a></li>
                    <li><a href="./contact.php"> Contact</a></li>
                    <li><a href="./about.php"> A propos</a></li>
                    <?php
                if (isset($_SESSION['user'])) 
                {
                      echo "<li style=\"float:right; margin-top:-7px;\"><a  href=\"./deconnexion.php\"><img src=\"./images/log_logout.png\" width=30></a></li>";
                      echo "<li style=\"float:right;\"><a  href=\"./profil.php\">Bienvenue " .$_SESSION["nom"]."</a></li>";
                      
                }
                ?>

</ul>
               
    </div>
  </div>
  
  </div>
  <div>
  	<img class="full-image" src="images/Montp.jpg"/>
  </div>
  <h2 class="title3">C.INVESTIS :</h2><p class="byline">Réaliser par Hatim Naoufal & Saddouk Soufiane & Anaiss </p>
  <div><p class="texte8">
  			Notre site intitulé C.INVESTIS, propose alors une source de données et statistiques sur tous les quartiers et sous-quartiers de Montpellier.</br>
  			Le but étant de pouvoir trouver toutes les informations et statistiques utiles aux succès de l’investissement grâce à un moyen de recherche facile et efficace. </br>
  		 	Notre application web couvre la population de Montpellier avec ses 7 grands quartiers et 30 sous-quartiers suivant le découpage administratif.</br>
  	 		On s’intéresse à 25 types de commerce différents, ce qui assure le choix à l’investisseur sur le choix de la localisation</p>
  	</p></div>
			<footer class="footer2">
						
							<div class="social-navigation">
							
										<span class="copyright">Rejoignez-nous :</span></br>
											<img  src="images/twitter-logo.png" alt="insta" width="40"><a href="https://twitter.com/"><span> Twitter</span></a>
											<img src="images/insta.png" alt="insta" width="40"/><a href="https://www.instagram.com/"><span>Instagram</span></a>				
	               			</div>
	               					<div class="copyright">
										Design by Hatim Naoufal & Soufiane SADDOUK & Anaiss .© 2018 Copyright Text
									</div>
						</footer>
  </body>
  </html>
