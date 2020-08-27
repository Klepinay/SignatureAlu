<?php 
		$numero = $_GET['numero'];
		$commercial = $_GET['commercial'];
		$technicien = $_GET['technicien'];
		$client = $_GET['client'];
		$ral = $_GET['ral'];
		$date = $_GET['date'];
	?>
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
<form method="POST" action="DL_pdf.php?commercial=<?php echo $commercial ?>&client=<?php echo $client ?>&ral=<?php echo $ral ?>&date=<?php echo $date ?>&technicien=<?php echo $technicien ?>&numero=<?php echo $numero ?>">
	<div id="fiche_de_chantier">
		<div id="titlefiche">
			<h2>Fiche de chantier</h2>
		</div>
		
		<label for="numero" id="labelnumero"><b>N° : </b></label>
		<input id="numero" name="numero" type="text" value="<?php echo $_GET['numero'] ?>" disabled="disabled" ><br />
		
		<label for="date" id="labeldate"><b>Date : </b></label>
		<input id="date" name="date" type="date" value="<?php echo $_GET['date']; ?>" disabled="disabled">
		
		<label for="Nchantier" id="labelNchantier"><b>N° de chantier : </b></label>
		<input id="Nchantier" name="Nchantier" type="texte" value="<?php echo $_GET['numero'] ?>" disabled="disabled"><br />	
		
		<label for="client" id="labelclient"><b>Client : </b></label>
		<input id="client" name="client" type="texte" value="<?php echo $_GET['client'] ?>" disabled="disabled"><br />
		
		<label for="adresse" id="labeladresse"><b>Adresse du chantier : </b></label>
		<textarea  name="adresse" id="adresse"></textarea><br />
		
		<label for="tel" id="labeltel"><b>Tel : </b></label>
		<input type="tel" name="tel" id="tel"> <br />
		
		<label for="commercial" id="labelcommercial"><b>Commercial : </b></label>
		<input type="texte" id="commercial" name="commercial" value="<?php echo $_GET['commercial'] ?>" disabled="disabled">
		
		<label for="technicien" style="margin-left: 50px"><b>Technicien : </b></label>
		<input type="texte" id="technicien" name="technicien" value="<?php echo $_GET['technicien'] ?>" disabled="disabled"><br />
		
		<label for="Nbrsmenuiserie" id="labelmenuiserie"><b>Nbrs de Menuiserie : </b></label>
		<input type="number" name="Nbrsmenuiserie" id="Nbrsmenuiserie">
		
		<label for="ral" style="margin-left: 50px"><b>R A L : </b></label>
		<input type="texte" id="ral" name="ral" value="<?php echo $_GET['ral'] ?>" disabled="disabled"><br/>
	</div>
	
	<div id="Renseignement_divers">
		<div id="titlerenseignement_divers">
			<h2>Renseignements Divers</h2>
		</div>
		<label for="linteau" id="labellinteau">Trait de niveau - Linteau :  </label>
		<input type="text" name="linteau" id="linteau"> / <input type="text" name="linteau2" id="linteau2"> / <input type="text" name="linteau3" id="linteau3"><br />
		
		<label for="sol" id="labelsol">Trait de niveau - Sol Fini : </label>
		<input type="text" name="sol" id="sol"> / <input type="text" name="sol2" id="sol2"> / <input type="text" name="sol3" id="sol3"><br />
		
		<div id="Electricite" align="center">
			<div id="titlelectricite">
				<h2>Electricité</h2>
			</div>
			<input type="checkbox" name="elec" id="oui" value="Oui"><label for="elec" id="labelelecyes">Oui</label>
			<input type="checkbox" name="elec" id="non" value="Non"><label for="elec" id="labelelecnon">Non</label>
		</div>
		
		<div id="enduit_interieur">
			<div id="title_enduit_interieur">
				<h2>Enduit Intérieur</h2>
			</div>
			
			Trad./Plâtre
			<input type="checkbox" name="platre" id="fait" value="Fait"><label for="fait" >Fait</label>
			<input type="checkbox" name="platre" id="faire" value="A Faire"><label for="faire">A faire</label><br />
			Plâco
			<input type="checkbox" name="placo" id="fait" value="Fait"><label for="placo_fait" >Fait</label>
			<input type="checkbox" name="placo" id="faire" value="A Faire"><label for="placo_faire">A faire</label>
		</div>
		
		<div id="enduit_exterieur">
			<div id="title_enduit_exterieur">
				<h2>Enduit exterieur</h2>
			</div>
			
			Trad./Proj.
			<input type="checkbox" name="proj" id="fait" value="Fait"><label for="proj_fait" >Fait</label>
			<input type="checkbox" name="proj" id="faire" value="A Faire"><label for="proj_faire">A faire</label><br />
			Bardage
			<input type="checkbox" name="bardage" id="fait" value="Fait"><label for="bardage_fait" >Fait</label>
			<input type="checkbox" name="bardage" id="faire" value="A Faire"><label for="bardage_faire">A faire</label>
		</div>
		
		<div id="depose">
			<div id="title_depose">
				<h2>Dépose</h2>
			</div>
			
			<input type="checkbox" name="depose" id="oui" value="Oui"><label for="oui_depose">Oui</label>
			<input type="checkbox" name="depose" id="non" value="Non"><label for="non_depose">Non</label><br />
			<input type="checkbox" name="check" id="client" value="Client"><label for="check_client">Client</label>
			<input type="checkbox" name="check" id="alu" value="Install Alu"><label for="install_alu">Install Alu</label><br />
		</div>
		
		<div id="etancheite">
			<div id="title_etancheite">
				<h2>Etanchéité (Entoilage) Tableau</h2>
			</div>
			
			<input type="checkbox" name="etancheite" id="fait" value="Fait"><label for="etancheite_fait" >Fait</label>
			<input type="checkbox" name="etancheite" id="faire" value="A Faire"><label for="etancheite_faire">A faire</label>
		</div>
	</div>
	
	<div id="renseigner" style="padding-left:50px;">
		<div id="title_renseigner">
			<h2>A Renseigner par le client</h2>
		</div>
			<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;1 </b></font>&nbsp; Présence inpérative du trait de niveau fourni par le Gros Oeuvre, ainsi que le renseignement pour la hauteur sol fini..................................
					<input type="checkbox" name="info1" id="oui" value="Oui"><label for="elec" id="labelelecyes">Oui</label>
					<input type="checkbox" name="info1" id="non" value="Non"><label for="elec" id="labelelecnon">Non</label> 
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;2 </b></font>&nbsp; Etanchéité des tableaux effectuer inpérativement avant la pose des menuiseries..................................
					<input type="checkbox" name="info2" id="oui" value="Oui"><label for="elec" id="labelelecyes">Oui</label>
					<input type="checkbox" name="info2" id="non" value="Non"><label for="elec" id="labelelecnon">Non</label>
				</p>

				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;3 </b></font>&nbsp; Suite à la prise de mesure aucune modification (changement sens d'ouvertures, trait de niveau, dimensions...) ne pourra être effectué..................................
					<input type="checkbox" name="info3" id="oui" value="Oui"><label for="elec" id="labelelecyes">Oui</label>
					<input type="checkbox" name="info3" id="non" value="Non"><label for="elec" id="labelelecnon">Non</label>
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;4 </b></font>&nbsp; Au-delà d'un délai de un mois après la date prévisionnelle de pose, le client s'engage à régler le solde de la fourniture (Hors Pose)..................................
					<input type="checkbox" name="info4" id="oui" value="Oui"><label for="elec" id="labelelecyes">Oui</label>
					<input type="checkbox" name="info4" id="non" value="Non"><label for="elec" id="labelelecnon">Non</label>
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;5 </b></font>&nbsp; Le client doit être présent lors de la récepetion de pose des menuiseries..................................
					<input type="checkbox" name="info5" id="oui" value="Oui"><label for="elec" id="labelelecyes">Oui</label>
					<input type="checkbox" name="info5" id="non" value="Non"><label for="elec" id="labelelecnon">Non</label>
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;6 </b></font>&nbsp; Le solde du chantier vous seras demandé à la réception avec le poseur. Merci de préciser le moyent de paiement
				</p>
    				
				
				<p align="center">
					<input type="checkbox" name="paye" value="Virement Bancaire (Delai Bancaire)">Virement bancaire (Délai Bancaire)
					<input type="checkbox" name="paye" value="Cheque">Chèque
					<input type="checkbox" name="paye" value="Especes">Espèces
				</p>
	</div>
	<div width="100%">
		<div id="signature_client">
			<p align="center">Signature client</p>
		</div>
		
		<div id="signature_technicien">
			<p align="center">Signature Technicien</p>
		</div>
	<div>
	
</body>
<footer>
		
	<div class="submit" width="100%">
		<p><input type="submit" value="Suivant" ></p>
	
	</div>
	</form>
</footer>