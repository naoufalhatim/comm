<?php
session_start();
$nom_quartier = $_GET['nom_quartier'];
$quartier = $_GET['id'];
$type_quartier = $_GET['type_quartier'];
$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
function getstat($bdd,$sql) 
{
    try {
                              $rep = $bdd->query($sql); 
                              while ($p = $rep ->fetch()){
                                                            echo"<tr><td>".$p[0]."</td><td>".$p[1]."</td><td>";
                                                            if ($p[1] > $p[2]) {
                                                             echo "<span><img src=\"./images/up.png\">  </span>";
                                                            }elseif ($p[2] > $p[1]) {
                                                              echo "<span><img src=\"./images/down.png\">  </span>";
                                                            }else{
                                                               echo "<span><img src=\"./images/eq.png\">  </span>";
                                                            }
                                                            echo $p[2]. "</td></tr>";
                                                          }  
        }  catch (PDOException $e) {
                            echo "Error: ".$e;
                            die();
                            }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
 


<div class="main01">
  
      <input class="firstab" id="tab0" type="radio" name="tabs" checked>
      <label class="labeltab"  for="tab0">Description</label>
  
      <input class="firstab" id="tab2" type="radio" name="tabs">
      <label class="labeltab" for="tab2">Avis</label>
     
  
  
      <div class="content12">  
        <div id="content1">
        <p>
         <?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $req = ('select * from quartier where nom_quartier = "'.$nom_quartier.'"');
    $rep = $bdd->query($req);
    while ($p = $rep ->fetch()){
      echo "<div> " . $p['nom_quartier'] . "</div> <p>" . $p['description'] . "</p>" ; 
   }
    }
catch(PDOException $e)
    {
    echo $req . "<br>" . $e->getMessage();
    }
       ?>
        </p>
        </div>
  
        <div id="content2">
        
          <?php 
try{
$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $rq = ('select * from avis where nom_quartier = "'.$nom_quartier .'"');
    $rp = $bdd->query($rq);
    while ($p = $rp ->fetch()){
      echo "<div class=\"imgnom\"><img src=\"images/avatar.png\" width=\"30\" height=\"30\" alt=\"avatar\"> <span style=\"color: #2f2c2c;\">  " . $p['nom_user'] . "</span> <p style=\"margin-top: 0px;\"><span style=\"color: #2f2c2c;\">" . $p['day'] . "</span><span style=\"color: #2f2c2c;\">/".$p['month']."/</span><span style=\"color: #2f2c2c;\">".$p['year']."</span></div> <p style=\"margin-top: 0px;border-style: hidden hidden hidden outset ;
    border-width: 6px; border-color: #1abc9c; \">" . $p["avis"] ."</p><hr>" ; 
   }
    }
catch(PDOException $e)
    {
    echo $rq . "<br>" . $e->getMessage();
    }
       ?>
       
        </div>
      </div>
  
</div>


  <?php include('graph.php'); ?>


<div class="tab1">
  <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'population')">Population </button>
  <button class="tablinks" onclick="openCity(event, 'activites_commerciales')">Activités commerciales</button>
  <button class="tablinks" onclick="openCity(event, 'categorie_socio_professionnelle')">Catégorie socio-professionnelle</button>
  <button class="tablinks" onclick="openCity(event, 'autres_activites')">  Autres activités</button>

</div>


<div id="population" class="tabcontent1" >
  <?php
$type_donnee = "Population";


echo "<table id=\"customers\"><tr><th>Donnee de Population</th><th>".$_GET['nom_quartier']."</th><th>Comparé aux autres quartier</th></tr>";

 $sql = ("SELECT  variable.libelle_variable, donnee.statistique, round( (SELECT SUM(do.statistique)  FROM `donnee` as do ,  `quartier`, `type_donnee`,  `variable` AS T1,  `donnee`,  `associer`  WHERE ( type_donnee.libelle_type_donnee = '$type_donnee'  AND associer.code_quartier = quartier.code_quartier AND associer.id_donnee = donnee.id_donnee  AND associer.id_variable = T1.id_variable  AND associer.id_type_donnee = type_donnee.id_type_donnee  AND do.id_donnee = associer.id_donnee  AND T1.libelle_variable = variable.libelle_variable AND quartier.id_type ='$type_quartier')) / (select count(quartier.code_quartier ) FROM quartier WHERE quartier.id_type ='$type_quartier'), 0)
FROM 
    `associer`
    INNER JOIN  `quartier` ON associer.code_quartier = quartier.code_quartier 
    INNER JOIN `type_donnee` ON associer.id_type_donnee = type_donnee.id_type_donnee 
    INNER JOIN `variable` ON associer.id_variable = variable.id_variable 
    INNER JOIN `donnee` ON associer.id_donnee = donnee.id_donnee 
 WHERE 
    type_donnee.libelle_type_donnee = '$type_donnee'
 AND
    quartier.code_quartier = '$quartier'

 GROUP BY  
     variable.libelle_variable");
      getstat($bdd,$sql);

   

?>

</table>
</div>

<div id="activites_commerciales" class="tabcontent1" style="display:none">
<?php
$type_donnee = "Activités commerciales";
//$quartier = "Hôpitaux-facultés";
//$type_quartier = "sous_quartier";
echo "<table id=\"customers\"><tr><th>Activités commerciales</th><th>".$_GET['nom_quartier']."</th><th>Comparé aux autres quartier</th></tr>";
try {
 $sql = ("SELECT  variable.libelle_variable, donnee.statistique, round( (SELECT SUM(do.statistique)  FROM `donnee` as do ,  `quartier`, `type_donnee`,  `variable` AS T1,  `donnee`,  `associer`  WHERE ( type_donnee.libelle_type_donnee = '$type_donnee'  AND associer.code_quartier = quartier.code_quartier AND associer.id_donnee = donnee.id_donnee  AND associer.id_variable = T1.id_variable  AND associer.id_type_donnee = type_donnee.id_type_donnee  AND do.id_donnee = associer.id_donnee  AND T1.libelle_variable = variable.libelle_variable)) / (select count(quartier.code_quartier ) FROM quartier WHERE quartier.id_type =2), 0)
FROM 
    `associer`
    INNER JOIN  `quartier` ON associer.code_quartier = quartier.code_quartier 
    INNER JOIN `type_donnee` ON associer.id_type_donnee = type_donnee.id_type_donnee 
    INNER JOIN `variable` ON associer.id_variable = variable.id_variable 
    INNER JOIN `donnee` ON associer.id_donnee = donnee.id_donnee 
 WHERE 
    type_donnee.libelle_type_donnee = '$type_donnee'
 AND
    quartier.code_quartier = '$quartier'
 GROUP BY  
     variable.libelle_variable");
      getstat($bdd,$sql);
    } catch (Exception $e) {
                            echo "Error: ".$e;
                            }
?>
</table>
</div>

<div id="categorie_socio_professionnelle" class="tabcontent1" style="display:none">
  <?php
        $type_donnee = "Catégorie socio-professionnelle";
        //$quartier = "Hôpitaux-facultés";
        //$type_quartier = "sous_quartier";
        echo "<table id=\"customers\"><tr><th>Catégorie socio-professionnelle</th><th>".$_GET['nom_quartier']."</th><th>Comparé aux autres quartier</th></tr>";
 try {
 $sql = ("SELECT  variable.libelle_variable, donnee.statistique, round( (SELECT SUM(do.statistique)  FROM `donnee` as do ,  `quartier`, `type_donnee`,  `variable` AS T1,  `donnee`,  `associer`  WHERE ( type_donnee.libelle_type_donnee = '$type_donnee'  AND associer.code_quartier = quartier.code_quartier AND associer.id_donnee = donnee.id_donnee  AND associer.id_variable = T1.id_variable  AND associer.id_type_donnee = type_donnee.id_type_donnee  AND do.id_donnee = associer.id_donnee  AND T1.libelle_variable = variable.libelle_variable)) / (select count(quartier.code_quartier ) FROM quartier WHERE quartier.id_type =2), 0)
FROM 
    `associer`
    INNER JOIN  `quartier` ON associer.code_quartier = quartier.code_quartier 
    INNER JOIN `type_donnee` ON associer.id_type_donnee = type_donnee.id_type_donnee 
    INNER JOIN `variable` ON associer.id_variable = variable.id_variable 
    INNER JOIN `donnee` ON associer.id_donnee = donnee.id_donnee 
 WHERE 
    type_donnee.libelle_type_donnee = '$type_donnee'
 AND
    quartier.code_quartier = '$quartier'
 GROUP BY  
     variable.libelle_variable");
      getstat($bdd,$sql);
    } catch (Exception $e) {
                            echo "Error: ".$e;
                            }
        
?>
</table>
</div>

<div id="autres_activites" class="tabcontent1" style="display:none">
   <?php
        $type_donnee = "Autres activités";
        //$quartier = "Hôpitaux-facultés";
       // $type_quartier = "sous_quartier";
        echo "<table id=\"customers\"><tr><th>Catégorie socio-professionnelle</th><th>".$_GET['nom_quartier']."</th><th>Comparé aux autres quartier</th></tr>";
  try {
 $sql = ("SELECT  variable.libelle_variable, donnee.statistique, round( (SELECT SUM(do.statistique)  FROM `donnee` as do ,  `quartier`, `type_donnee`,  `variable` AS T1,  `donnee`,  `associer`  WHERE ( type_donnee.libelle_type_donnee = '$type_donnee'  AND associer.code_quartier = quartier.code_quartier AND associer.id_donnee = donnee.id_donnee  AND associer.id_variable = T1.id_variable  AND associer.id_type_donnee = type_donnee.id_type_donnee  AND do.id_donnee = associer.id_donnee  AND T1.libelle_variable = variable.libelle_variable)) / (select count(quartier.code_quartier ) FROM quartier WHERE quartier.id_type =2), 0)
FROM 
    `associer`
    INNER JOIN  `quartier` ON associer.code_quartier = quartier.code_quartier 
    INNER JOIN `type_donnee` ON associer.id_type_donnee = type_donnee.id_type_donnee 
    INNER JOIN `variable` ON associer.id_variable = variable.id_variable 
    INNER JOIN `donnee` ON associer.id_donnee = donnee.id_donnee 
 WHERE 
    type_donnee.libelle_type_donnee = '$type_donnee'
 AND
    quartier.code_quartier = '$quartier'
 GROUP BY  
     variable.libelle_variable");
      getstat($bdd,$sql);
    } catch (Exception $e) {
                            echo "Error: ".$e;
                            }
?>
</table>
</div>
<script>
function openCity(evt, type_donnee) {
    var i, tabcontent1, tablinks;
    tabcontent1 = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent1.length; i++) {
        tabcontent1[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(type_donnee).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();




</script>
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
