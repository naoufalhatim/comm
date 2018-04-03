<?php
	$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
    if(isset($_POST['search']) && !empty($_POST['search'])){
		$search = $_POST['search'];
		if(isset($_COOKIE['q']) && !empty($_COOKIE['q'])){
		$q = $_COOKIE['q'];
		 }
		$sql=("SELECT * FROM quartier WHERE  nom_quartier LIKE '".$search."%' and id_type='".$q."' ORDER BY  nom_quartier DESC");
				$rep = $bdd->query($sql); 
        while ($rows = $rep ->fetch()){					   
			print('<li><a href="../results.php?id='.$rows["code_quartier"].'&nom_quartier='.$rows["nom_quartier"].'&type_quartier='.$rows["id_type"].'">'.$rows["nom_quartier"].'</a></li>');
		}
	}
?>
