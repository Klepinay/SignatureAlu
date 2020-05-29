<?php
	$numero = ($_POST['numero']);
	$date = ($_POST['date']);
	$Nchantier = ($_POST['Nchantier']);
	$client = ($_POST['client']);
	$adresse = ($_POST['adresse']);
	$tel = ($_POST['tel']);
	$commercial = ($_POST['commercial']);
	$technicien = ($_POST['technicien']);
	$Nbrsmenuiserie	= ($_POST['Nbrsmenuiserie']);
	$linteau	= ($_POST['linteau']);
	$sol	= ($_POST['sol']);
	$elecoui	= ($_POST['elecoui']);
	$elecnon	= ($_POST['elecnon']);
	
	$lign = array($numero,$date,$Nchantier,$client,$adresse,$tel,$commercial,$technicien,$Nbrsmenuiserie,$linteau,$sol,$elecoui,$elecnon);
	$all = implode(',', $lign);
	$fp = fopen("fichedechainter.pdf", 'a+');
	fputs($fp,$all);
	fclose($fp);