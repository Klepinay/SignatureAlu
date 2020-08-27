<?php
	$numero = $_GET['numero'];
	$technicien = $_GET['technicien'];
	$date = $_GET['date'];
	$nchantier = $_POST['Nchantier'];
	$client = $_GET['client'];
	$adresse = $_POST['adresse'];
	$tel = $_POST['tel'];
	$commercial = $_GET['commercial'];
	$nbrsmenuiserie = $_POST['Nbrsmenuiserie'];
	$ral = $_GET['ral'];
	
	$url =  "nouvelle_prise_de_cote.php?technicien=$technicien&numero=$numero&date=$date&Nchantier=$nchantier&client=$client&adresse=$adresse&tel=$tel&commercial=$commercial&Nbrsmenuiserie=$nbrsmenuiserie&ral=$ral";
	
	
	header("Location: $url");