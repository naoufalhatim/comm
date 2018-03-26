<?php 
  session_start();
?>
    <html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Contactez-nous</title>

    <head>
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

                    <div class="formCont">

                        <ul class="tab-group">
                            <li class="tabCont">Contactez-nous</li>
                        </ul>

                        <div class="tab-content">
                            <div id="signup">
                                <form action="sendmail.php" method="GET">

                                    <div class="top-row">
                                        <div class="field-wrap">
                                            <label class="label1">
                                                Votre prénom<span class="req">*</span>
                                            </label>
                                            <input type="text" required autocomplete="off" name="n">
                                        </div>

                                        <div class="field-wrap">
                                            <label class="label1">
                                                Votre nom<span class="req">*</span>
                                            </label>
                                            <input type="text" required autocomplete="off" name="p">
                                        </div>
                                    </div>

                                    <div class="field-wrap">
                                        <label class="label1">
                                            Adresse e-mail<span class="req">*</span>
                                        </label>
                                        <input type="email" required autocomplete="off" name="mail">
                                    </div>

                                    <div class="field-wrap">
                                        <label class="label1">
                                            Message<span class="req">*</span>
                                        </label>
                                        <textarea id="subject" name="subject" placeholder="" style="height:200px"></textarea>
                                    </div>

                                    <input value="Envoyer" type="submit" class="button1 button-block1" />

                                </form>

                            </div>

                            <div id="login">

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            </div>
            <footer class="footer2">

                <div class="social-navigation">

                    <span class="copyright">Rejoignez-nous :</span></br>
                    <img src="images/twitter-logo.png" alt="insta" width="40"><a href="https://twitter.com/"><span> Twitter</span></a>
                    <img src="images/insta.png" alt="insta" width="40" /><a href="https://www.instagram.com/"><span>Instagram</span></a>
                </div>
                <div class="copyright">
                    Design by Hatim Naoufal & Soufiane SADDOUK.© 2018 Copyright Text
                </div>
            </footer>

    </body>

    </html>