

	<html>
<head>
	<title>Geting page infos </title>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');

$nom =  $_GET["n"];
$prenom = $_GET["p"];
$email = $_GET["mail"];
$mdp = $_GET["mdp"];

$rq = "insert into user values (0, '$nom' ,'$prenom','$email','$mdp')";
$rep = $bdd->query($rq);


  	  echo "inscription reussie ...</br>";
  	  echo "<meta http-equiv='refresh' content='2;url=index.php'>"; 
	 
		
	 
?>

</head>
<body>
	
</body>
</html>

