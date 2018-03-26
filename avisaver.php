<?php 
session_start();
$id_user=$_SESSION["id"];
$nom_user=$_SESSION["nom"];
$nom_quartier = $_GET["quartier"];
$ac=$_GET["ac"];
$tec=$_GET["tec"];
$st=$_GET["st"];
$sec=$_GET["sec"];
$pr=$_GET["pr"];
$ev=$_GET["ev"];
$rec=$_GET["rec"];
$avis=$_GET["avis"];
$year=date("Y");
$month=date("m");
$day=date("d");

 ?>


 <?php 

	try{
$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
$bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$rq = "insert into avis values (0, '$id_user' ,'$nom_user','$nom_quartier','$ac','$tec','$st','$sec','$pr','$ev','$rec','$avis','$day','$month','$year')";
$rep = $bdd->query($rq);

		echo "merci de nous partager votre avis";
		
		$rq2 = ('select * from quartier where nom_quartier = "'.$nom_quartier.'"');
		$rp = $bdd->query($rq2);
		while ($p = $rp ->fetch()){
  	 	echo "<meta http-equiv='refresh' content='7;url=results.php?id=" . $p['code_quartier'] . "&nom_quartier=" . $nom_quartier . "&type_quartier=" . $p["id_type"] . "'>"; 
	 }
    }
catch(PDOException $e)
    {
    echo $rq . "<br>" . $e->getMessage();
    }


 ?>
 	