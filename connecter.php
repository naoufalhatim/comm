<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"	href="styles/Style.css"	type="text/css"	
media="screen"	/>	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<title>kkjkjjk</title>
<?php  

 
function auth($mail,$mdp)
{		
		$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');

		$sql= ("Select * from user where user.mail='".$mail."'");
		//echo $sql;
		$rep = $bdd->query($sql);
		$c = $rep->fetch(); 
		if(isset($c['mail']) AND $c['mdp']==$mdp){
			echo $c['mail'];
		$_SESSION['user']=array($c['id_client'],$c['nom'],$c['prenom'],$c['mail'],$c['mdp']);
		$_SESSION['id'] = $c['id_client'];
		$_SESSION['nom'] = $c['nom'];
		$_SESSION['prenom'] =$c['prenom'];
		echo "<br>informations correctes";
		echo "<meta http-equiv='refresh' content='2;url=recherche/recherche.php?n=" . $c['nom'] . "&p=" . $c['prenom'] . "&mail=" . $c['mail'] . "'>"; 

			}
		else {
			echo " erreur ! Veuillez vérifier vos identifiants . ";
			echo "<meta http-equiv='refresh' content='2; URL=index.php?mail=".$mail."'>";
		}
		$rep ->closeCursor(); 
}
auth($_GET['mail'],$_GET['mdp']);

?>


</head>
<body>

</body>
</html>