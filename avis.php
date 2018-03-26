<?php 
   session_start();
   ?>
   <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src='./js/quartier.js'></script>
<link type="text/css" rel="stylesheet" href="css/style.css" />
 <link href="./css/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
 <title>Postez un avis</title>
</head>

<body>
  <div class="header">
        <img class="montp" src="./images/img11.png" />
        <div class="head01">
            <div id="img1" class="head01">
                <a href="index.php" target="_blank"><img class="logo" src="./images/INVESTIS_logo.png" alt="C.investis logo" /></a>
                
            </div>
            
        </div>
        </div>


<div class="container">
    <div>
                <ul class="nav">
                    <li><a href="./recherche/recherche.php"><i class="icon-home icon-large"></i></a></li>
                    <li><a href="./recherche/recherche.php">Trouver ou investir</a></li> 
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
 

<div>
         <div class="h-body">
            <div class="formAvis">
               <ul class="tab-group">
                  <li class="tabCont">Votre avis nous intéresse</li>
               </ul>
               		<form id="demo" name="frm" action="avisaver.php" method="GET"  enctype="multipart/form-data">
                        <fieldset class="c11">
                           <legend> De quel quartier sagit-il ? </legend>
								<select name="q" id="q" onchange="change();">
									<option value="mosson">Mosson</option>
									<option value="hopitaux_facultes">Hôpitaux-facultés</option>
									<option value="centre">Centre</option>
									<option value="croix_dargent">Croix d'Argent</option>
									<option value="cevennes">Cévennes</option>
									<option value="pres_darenes">Près d'Arènes</option>
									<option value="port_marianne">Port Marianne</option>
								</select>
                              	<select name="quartier" id="quartier" required disabled="disabled"></select>
						</fieldset>
						<fieldset class="c2">
                              <legend>Vos avis :</legend>
                         <fieldset class="rating" >
						         <span class="rat">Activitée commerciale :</span>                    
									    <input type="radio" class="inprat" id="star5" name="ac" value="5" /><label class = "full" for="star5" title="Très bien"></label>
									    <input type="radio" class="inprat" id="star4" name="ac" value="4" /><label class = "full" for="star4" title="Assez bien"></label>
									    <input type="radio" class="inprat"  id="star3" name="ac" value="3" /><label class = "full" for="star3" title="Passable"></label>
									    <input type="radio" class="inprat"  id="star2" name="ac" value="2" /><label class = "full" for="star2" title="Médiocre"></label>
									    <input type="radio" class="inprat"  id="star1" name="ac" value="1" /><label class = "full" for="star1" title="Mal"></label>
						</fieldset>
						   
						<fieldset class="rating" >
						    	 <span class="rat">Transport en commun :</span>                    
								    <input type="radio" class="inprat"  id="star51" name="tec" value="5" /><label class = "full" for="star51" title="Très bien"></label>
								    <input type="radio" class="inprat"  id="star41" name="tec" value="4" /><label class = "full" for="star41" title="Assez bien"></label>
								    <input type="radio" class="inprat"  id="star31" name="tec" value="3" /><label class = "full" for="star31" title="Passable"></label>
								    <input type="radio" class="inprat"  id="star21" name="tec" value="2" /><label class = "full" for="star21" title="Médiocre"></label>
								    <input type="radio" class="inprat"  id="star11" name="tec" value="1" /><label class = "full" for="star11" title="Mal"></label>
						</fieldset>
						<fieldset class="rating" >
						    	 <span class="rat">Stationnement :</span>                    
								    <input type="radio" class="inprat"  id="star52" name="st" value="5" /><label class = "full" for="star52" title="Très bien"></label>
								    <input type="radio" class="inprat"  id="star42" name="st" value="4" /><label class = "full" for="star42" title="Assez bien"></label>
								    <input type="radio" class="inprat"  id="star32" name="st" value="3" /><label class = "full" for="star32" title="Passable"></label>
								    <input type="radio" class="inprat"  id="star22" name="st" value="2" /><label class = "full" for="star22" title="Médiocre"></label>
								    <input type="radio" class="inprat"  id="star12" name="st" value="1" /><label class = "full" for="star12" title="Mal"></label>
						</fieldset>
						<fieldset class="rating" >
						    	 <span class="rat">Sécurité :</span>                    
								    <input type="radio" class="inprat"  id="star53" name="sec" value="5" /><label class = "full" for="star53" title="Très bien"></label>
								    <input type="radio" class="inprat"  id="star43" name="sec" value="4" /><label class = "full" for="star43" title="Assez bien"></label>
								    <input type="radio" class="inprat"  id="star33" name="sec" value="3" /><label class = "full" for="star33" title="Passable"></label>
								    <input type="radio" class="inprat"  id="star23" name="sec" value="2" /><label class = "full" for="star23" title="Médiocre"></label>
								    <input type="radio" class="inprat"  id="star13" name="sec" value="1" /><label class = "full" for="star13" title="Mal"></label>
						</fieldset>
						<fieldset class="rating" >
						    	 <span class="rat">Propreté :</span>                    
								    <input type="radio" class="inprat"  id="star54" name="pr" value="5" /><label class = "full" for="star54" title="Très bien"></label>
								    <input type="radio" class="inprat"  id="star44" name="pr" value="4" /><label class = "full" for="star44" title="Assez bien"></label>
								    <input type="radio" class="inprat"  id="star34" name="pr" value="3" /><label class = "full" for="star34" title="Passable"></label>
								    <input type="radio" class="inprat"  id="star24" name="pr" value="2" /><label class = "full" for="star24" title="Médiocre"></label>
								    <input type="radio" class="inprat"  id="star14" name="pr" value="1" /><label class = "full" for="star14" title="Mal"></label>
						</fieldset>
						<fieldset class="rating" >
						    	 <span class="rat">Espace vert :</span>                    
								    <input type="radio" class="inprat"  id="star55" name="ev" value="5" /><label class = "full" for="star55" title="Très bien"></label>
								    <input type="radio" class="inprat"  id="star45" name="ev" value="4" /><label class = "full" for="star45" title="Assez bien"></label>
								    <input type="radio" class="inprat"  id="star35" name="ev" value="3" /><label class = "full" for="star35" title="Passable"></label>
								    <input type="radio" class="inprat"  id="star25" name="ev" value="2" /><label class = "full" for="star25" title="Médiocre"></label>
								    <input type="radio" class="inprat"  id="star15" name="ev" value="1" /><label class = "full" for="star15" title="Mal"></label>
						</fieldset>
						
						<fieldset class="rating" >
<span class="rat">Recommanderiez-vous ce quartier?</span> </br>
<input style="width: 0%" class="radio1" type="radio"  name="rec" value="1" />Oui</br>
<input style="width: 0%" class="radio1" type="radio"  name="rec" value="-1" />Non
</fieldset>

</fieldset>
				<textarea  name="avis" placeholder="votre avis..." style="height:200px"></textarea>
 				<input class="button1 button-block1" value="Envoyer" type="submit" />
</form>






</div>
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
</div>

					
</body>
</html>