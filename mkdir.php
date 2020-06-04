<?php

	$commercial = htmlspecialchars($_POST['commercial']);
	$technicien = htmlspecialchars($_POST['technicien']);
	$numero = htmlspecialchars($_POST['numero']);
	$numero2 = htmlspecialchars($_POST['numero2']);
	$client = htmlspecialchars($_POST['client']);
	$ral = htmlspecialchars($_POST['ral']);
	$date = htmlspecialchars($_POST['date']);
	

	mkdir("prise de cote/$numero-$numero2   $client", 0777);
	
	$url = "Fiche_de_chantier.php?commercial=$commercial&client=$client&ral=$ral&date=$date&technicien=$technicien&numero=$numero-$numero2";
	$url=str_replace(PHP_EOL, '', $url);
	header("Location: $url");
	
?>