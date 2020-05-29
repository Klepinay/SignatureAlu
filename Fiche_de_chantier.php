<!doctype html>
	<head>
		<title>Fiche de Chantier</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" href="fiche.css">
		<style media="print" type="text/css"> 
			.noImpr {
				display:none;
			} 
		</style>
	</head>

<body>
	<div id="container">
	
		<div id="logo">
			<img src="images\LOGO-SIGNATURE-ALU-OK-8X4.jpg" width="100%">
		</div>
		
		<div id="contact">
			<p>115 Allée de Montaignac<br />
			97427 L'Etang-Salé<br />
			Tél : 0262 423924<br />
			Email : contact@signature-alu.com<br />
			siret: 828 716 027 00010-APE 2512 B</p>
		</div>
		
	</div>
<form method="POST" action="cible.php">
	<div id="fiche_de_chantier">
		<div id="titlefiche">
			<h2>Fiche de chantier</h2>
		</div>
		
		<label for="numero" id="labelnumero">N° : </label>
		<input type="number" id="numero" name="numero" ><br />
		
		<label for="date" id="labeldate">Date : </label>
		<input type="date" id="date" name="date">
		
		<label for="Nchantier" id="labelNchantier">N° de chantier : </label>
		<input type="number" name="Nchantier" id="Nchantier">	
		
		<label for="client" id="labelclient">Client : </label>
		<input type="text" name="client" id="client" value="<?php echo $_GET['client'] ?>"><br />
		
		<label for="adresse" id="labeladresse">Adresse du chantier : </label>
		<textarea  name="adresse" id="adresse"></textarea><br />
		
		<label for="tel" id="labeltel">Tel : </label>
		<input type="tel" name="tel" id="tel"> <br />
		
		<label for="commercial" id="labelcommercial">Commercial : </label>
		<input type="text" name="commercial" id="commercial" value="<?php echo $_GET['commercial'] ?>">
		
		<label for="technicien">Technicien : </label>
		<input type="text" name="technicien" id="technicien" value="<?php echo $_GET['technicien'] ?>"><br />
		
		<label for="Nbrsmenuiserie" id="labelmenuiserie">Nbrs de Menuiserie : </label>
		<input type="number" name="Nbrsmenuiserie" id="Nbrsmenuiserie">
		
		<label for="ral">R A L : </label>
		<input type="couleur" name="ral" id="ral" value="<?php echo $_GET['ral'] ?>"><br/>
	</div>
	
	<div id="Renseignement_divers">
		<div id="titlerenseignement_divers">
			<h2>Renseignements Divers</h2>
		</div>
		<label for="linteau" id="labellinteau">Trait de niveau - Linteau :  </label>
		<input type="text" name="linteau" id="linteau"> / <input type="text" name="linteau2" id="linteau2"> / <input type="text" name="linteau3" id="linteau3"><br />
		
		<label for="sol" id="labelsol">Trait de niveau - Sol Fini : </label>
		<input type="text" name="sol" id="sol"> / <input type="text" name="sol2" id="sol2"> / <input type="text" name="sol3" id="sol3"><br />
		
		<div id="Electricite" align="center"	>
			<div id="titlelectricite">
				<h2>Electricité</h2>
			</div>
			<input type="checkbox" name="elecoui" id="elecoui"><label for="elecoui" id="labelelecoui">Oui</label>
			<input type="checkbox" name="elecnon" id="elecnon"><label for="elecnon" id="labelelecnon">Non</label>
		</div>
		
		<div id="enduit_interieur">
			<div id="title_enduit_interieur">
				<h2>Enduit Intérieur</h2>
			</div>
			
			Trad./Plâtre<input type="checkbox" name="fait" id="fait"><label for="fait" >Fait</label><input type="checkbox" name="faire" id="faire"><label for="faire">A faire</label><br />
			Plâco<input type="checkbox" name="placo_fait" id="placo_fait"><label for="placo_fait" >Fait</label><input type="checkbox" name="placo_faire" id="placo_faire"><label for="placo_faire">A faire</label>
		</div>
		
		<div id="enduit_exterieur">
			<div id="title_enduit_exterieur">
				<h2>Enduit exterieur</h2>
			</div>
			
			Trad./Proj.<input type="checkbox" name="proj_fait" id="proj_fait"><label for="proj_fait" >Fait</label><input type="checkbox" name="proj_faire" id="proj_faire"><label for="proj_faire">A faire</label><br />
			Bardage<input type="checkbox" name="bardage_fait" id="bardage_fait"><label for="bardage_fait" >Fait</label><input type="checkbox" name="bardage_faire" id="bardage_faire"><label for="bardage_faire">A faire</label>
		</div>
		</div>
	
	</div>

	
</body>
<footer>
		
	<div class="noImpr">
		<p align="center"><input type="submit" value="Suivant" ></p>
	<?php 
		$commercial = $_GET['commercial'];
		$technicien = $_GET['technicien'];
		$client = $_GET['client'];
		$ral = $_GET['ral'];
		$date = $_GET['date'];
	?>
		<a href="nouvelle_prise_de_cote.php?commercial=<?php echo $commercial ?>&client=<?php echo $client ?>&ral=<?php echo $ral ?>&date=<?php echo $date ?>&technicien=<?php echo $technicien ?>"><input type="button" value="Nouvelle"></a>		
	</div>
	</form>
</footer>