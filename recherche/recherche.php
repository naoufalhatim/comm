<?php 
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content-type="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="../css/style_search.css">
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>recherche de Quartier</title>

</head>

<body>
  <div>
    <div class="header">
        <img class="montp" src="../images/img11.png" />
        <div class="head01">
            <div id="img1" class="head01">
                <a href="../index.php" target="_blank"><img class="logo" src="../images/INVESTIS_logo.png" alt="C.investis logo" /></a>
            </div>
        </div>
    </div>

    <div class="container">
    <div>
                <ul class="nav">
                    <li><a href="../recherche/recherche.php"><i class="icon-home icon-large"></i></a></li>
                    <li><a href="../recherche/recherche.php">Trouver ou investir</a></li> 
                    <li><a href="../avis.php"> Poster votre avis</a></li>
                    <li><a href="../contact.php"> Contact</a></li>
                    <li><a href="../about.php"> A propos</a></li>
                    <?php
                if (isset($_SESSION['user'])) 
                {
                       echo "<li style=\"float:right; margin-top:-7px;\"><a  href=\"../deconnexion.php\"><img src=\"../images/log_logout.png\" width=30></a></li>";
                      echo "<li style=\"float:right;\"><a  href=\"./profil.php\">Bienvenue " .$_SESSION["nom"]."</a></li>";
                      
                }
                ?>

</ul>
               
    </div>
  </div>
 
  </div>
  <div class="mainsearch">
        <div class="left">
            <h1>Rechercher un Quartier</h1>
           <form method="post" action="" name="controls" id="controls" >
                <label class="labchoice" for="quartier">Quartier</label>
                <input type="radio" class="q" name="q" value="1">
                <br>
                <label class="labchoice" for="quartier">Sous-Quartier</label>
                <input type="radio" class="q" name="q" value="2">
                <br>
                <img src="../images/search_icon.png" width="20px" height="20px" alt="O--" title="Rechercher un Quartier" /> &nbsp;
                <input autocomplete="off" style="font-weight: bold; font-size: 15px; height: 40px;" type="text" placeholder="Quartier, Sous-Quartier..." name="search" id="search" />
                <!-- Affichage des résultats-->
                <div id="resultat">
                    <ul id="search-results">
                    </ul>
                </div>

            </form>

            <!-- Affichage de l'image de chargement -->
            <div id="loader">
                <div class="spinner"></div>
                <img src="../images/ajax-loader.gif" alt="Loading..." />
            </div>
        </div>

        <div id="map"></div>
        <div id="content-window"></div>
    </div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: {
                    lat: 43.6108,
                    lng: 3.8833
                }
            });

            var kmlLayer = new google.maps.KmlLayer({
                url: 'https://raw.githubusercontent.com/naoufalhatim/myscripts/master/c2.kml',
                suppressInfoWindows: true,
                map: map
            });

            kmlLayer.addListener('click', function(kmlEvent) {
                var text = kmlEvent.featureData.description;
                showInContentWindow(text);
            });

            function showInContentWindow(text) {
                var sidediv = document.getElementById('content-window');
                sidediv.innerHTML = text;
                window.location.href = sidediv.innerHTML;
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYpd5CmxqW4wmNZAAL69I4k3KJ6PsnIIM&callback=initMap">
    </script>

    <script src="../js/jquery.js"></script>
    <script src="../js/func.js"></script>
    <!-- La fonction ici contient la partie ajax -->
    <footer class="footer1">

        <div class="social-navigation">

            <span class="copyright">Rejoignez-nous :</span></br>
            <img src="../images/twitter-logo.png" alt="insta" width="40"><a href="https://twitter.com/"><span> Twitter</span></a>
            <img src="../images/insta.png" alt="insta" width="40" /><a href="https://www.instagram.com/"><span>Instagram</span></a>
        </div>
        <div class="copyright">
            Design by Hatim Naoufal & Soufiane SADDOUK.© 2018 Copyright Text
        </div>
    </footer>
</body>

</html>
