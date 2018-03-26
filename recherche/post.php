<?php
	$bdd = new PDO('mysql:host=localhost;dbname=investis04;charset=utf8','root','');
    if(isset($_POST['search']) && !empty($_POST['search'])){
		$search = $_POST['search'];
		//$qq= $_POST['qq'];
		//print_r("_______".$qq."_______");

		//$sql=("SELECT * FROM quartier WHERE  nom_quartier LIKE '".$search."%' and id_type='".$qq."' ORDER BY  nom_quartier DESC");
		$sql=("SELECT * FROM quartier WHERE  nom_quartier LIKE '".$search."%' and id_type=2 ORDER BY  nom_quartier DESC");
		
		//print_r($sql);
				$rep = $bdd->query($sql); 
        while ($rows = $rep ->fetch()){					   
			print('<li><a href="../results.php?id='.$rows["code_quartier"].'&nom_quartier='.$rows["nom_quartier"].'&type_quartier='.$rows["id_type"].'">'.$rows["nom_quartier"].'</a></li>');
		}
	}

?>
