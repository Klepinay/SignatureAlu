	<?php 
	$numero = $_GET['numero'];
	$technicien = $_GET['technicien'];
	$date = $_GET['date'];
	$Nchantier = $_GET['Nchantier'];
	$client = $_GET['client'];
	$adresse = $_GET['adresse'];
	$tel = $_GET['tel'];
	$commercial = $_GET['commercial'];
	$Nbrsmenuiserie = $_GET['Nbrsmenuiserie'];
	$ral = $_GET['ral'];
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Nouveau Dossier</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style2.css">
	</head>
	
	<body>
		<header >
			<image src="images\LOGO-SIGNATURE-ALU-OK-8X4.jpg" width="49%" name="logo" id="logo" ></image>
			 <div id="info" style="border-left: 1px solid black">
			 <h1 align="center" style="margin-bottom: 50px;">Informations</h1>
				<b style="margin-left:50px;">N° : </b>
				<?php echo $numero ?><br /><br />
				
				<b style="margin-left:50px;">Date : </b>
				<?php echo $date ?>
				
				<b style="margin-left : 120px;">N° de chantier : </b>
				<?php echo $Nchantier ?><br /><br />
				
				<b style="margin-left:50px;">Client : </b>
				<?php echo $client ?><br /><br />
				
				<b style="margin-left:50px;">Adresse du chantier : </b>
				<?php echo $adresse ?><br /><br />
				
				<b style="margin-left:50px;">Tel : </b>
				<?php echo $tel ?> <br /><br />
				
				<b style="margin-left:50px;">Commercial : </b>
				<?php echo $commercial ?>
				
				<b style="margin-left:50px;">Technicien : </b>
				<?php echo $technicien ?><br /><br />
				
				<b style="margin-left:50px;">Nbrs de Menuiserie : </b>
				<?php echo $Nbrsmenuiserie ?>
				
				<b style="margin-left:65px;">R A L : </b>
				<?php echo $ral ?><br/><br />
			</div>
		</header>

		<!--Tableau des catégories primaire-->
		<table width="100%" border="1" style="border-top: 1px solid black">
			<tr>
				<td width="50%">
					<table width="50%" border="0">
						<tr>
							<td align="center">
								<a href="/Signature/MENUISERIE\BS TOLE DIVERS 2020\divers.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Divers</button></a>
							</td>
							<td align="center">
								<button class="button" type="button" id="Coul">Coulissant Vtx</button>
							</td>
							<td align="center">
								<button class="button" type="button" id="Frappe">Frappe</button>
							</td>
							<td align="center">
								<button class="button" type="button" id="Galandage">Galandage - Gal angle</button>
							</td>
							<td align="center">
								<button class="button" type="button" id="GardeCorps">Garde Corps</button>
							</td>
							<td align="center">
								<a href="\Signature\MENUISERIE\Hublot 2020\Hublot 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button" id="Hublot">Hublot</button></a>
							</td>
							<td align="center">
								<a href="\Signature\MENUISERIE\Jalousie\Jalousie.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button" id="Jalousie">Jalousie</button></a>
							</td>
							<td align="center">
								<button class="button" type="button" id="VB">Volet Battant</button>
							</td>
							<td align="center">
								<a href="\Signature\MENUISERIE\Volet Roulant\Volet Roulant2.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button" id="VR">Volet Roulant</button></a>
							</td>
						</tr>
					</table>

					<!-- Tableau de la catégorie Coulissant -->
					<div id="table1" >			
						<table width="50%" border="0" >
							<tr align="center">
								<td>
									<a href="\Signature\MENUISERIE\Coulissant\Coul 2Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo$ral ?>"><button class="button" type="button">2 Vtx</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Coulissant\Coul 3Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">3 Vtx</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Coulissant\Coul 4Vtx 2 Rails.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">4 Vtx 2 Rails</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Coulissant\Coul 4Vtx 4 Rails.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">4 Vtx 4 Rails</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Coulissant\Coul 6Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">6 Vtx</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Coulissant\Coulissant d'angle 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Angle</button></a>
								</td>
							</tr>
							
						</table>
					</div>

					<!-- Tableau de la catégorie Frappe -->
					<div id="table3" >			
						<table width="50%" border="0" >
							<tr align="center">
								<td>
									<button class="button" type="button" id="Fixe">Fixe et composé</button>
								</td>
								<td>
									<button class="button" type="button" id="FoF">FoF Souf Osci Proj</button>
								</td>
								<td>
									<button class="button" type="button" id="Portes">Portes</button>
								</td>
							</tr>
							
						</table>
					</div>

						<!-- Taleau de la sous-catégorie Fixe et composé -->
						<div id="table3-1" >			
							<table width="50%" border="0" >
								<tr align="center">
									<td>
										<a href="\Signature\MENUISERIE\Frappe\Fixe et compose\Ensemble compose.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Ensemble composé</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\Fixe et compose\Fixe angle2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Fixe angle</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\Fixe et compose\fixe.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Fixe</button></a>
									</td>
								</tr>
								
							</table>
						</div>

						<!-- Tableau de la sous-catégorie FoF Souf Osci Proj -->
						<div id="table3-2" >			
							<table width="50%" border="0" >
								<tr align="center">
									<td>
										<a href="\Signature\MENUISERIE\Frappe\FoF Souf Osci Proj\Fof 2 Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Fof 2 Vtx</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\FoF Souf Osci Proj\FoF1 Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Fof 1 Vtx</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\FoF Souf Osci Proj\Oscillot.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Oscillot</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\FoF Souf Osci Proj\Projetant 17.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Projetant 17</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\FoF Souf Osci Proj\Soufflet.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Soufflet</button></a>
									</td>
								</tr>
								
							</table>
						</div>

						<!-- Tableau de la sous-catégorie Portes -->
						<div id="table3-3" >			
							<table width="50%" border="0" >
								<tr align="center">
									<td>
										<a href="\Signature\MENUISERIE\Frappe\Portes\Porte 1 Vt.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Porte 1 Vtx</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\Portes\Porte 2 Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Portes 2 Vtx</button></a>
									</td>
									<td>
										<a href="\Signature\MENUISERIE\Frappe\Portes\Porte Tierce 2 Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Porte Tierce 2 Vtx</button></a>
									</td>
								</tr>
								
							</table>
						</div>

					<!-- Taleau de la catégorie Galandage -->
					<div id="table4">			
						<table width="50%" border="0" >
							<tr align="center">
								<td>
									<a href="\Signature\MENUISERIE\Galandage - Gal angle 2020\Gal 1 Rail.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Gal 1 Rail</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Galandage - Gal angle 2020\Gal 2 Rail.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Gal 2 Rails</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Galandage - Gal angle 2020\Gal 3 Rails.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Gal 3 Rails</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Galandage - Gal angle 2020\Gal 4 Rails.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Gal 4 Rails</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Galandage - Gal angle 2020\Galandage D'angle.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Galandage d'angle</button></a>
								</td>
							</tr>
							
						</table>
					</div>

					<!-- Tableau de la catégorie Garde Corps -->
					<div id="table5">			
						<table width="50%" border="0" >
							<tr align="center">
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\G C Droit Barreaude 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GC Droit Barreaudé</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\G C Droit Vitre JMD 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GC Droit Vitré JMD</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\G C Droit Vitre PS 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GC Droit Vitré PS</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\G C Rampant Barreaude 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GC Rampant Barreaudé</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\G C Rampant Vitre JMD 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GC Rampant Vitré JMD</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\G C Rampant Vitre PS 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GC Rampant Vitré PS</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\GRILLE de Protection 2020.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">GRILLE de protection</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\MC sur Muret.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">MC sur Muret</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Garde Corps 2020\Portillon.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Portillon</button></a>
								</td>
							</tr>
							
						</table>
					</div>

					<!-- Tableau de la catégorie Volet Battant -->
					<div id="table8">			
						<table width="50%" border="0" >
							<tr align="center">
								<td>
									<a href="\Signature\MENUISERIE\Volet Battant\Volet Battant 1 Vtl.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Volet Battant 1 Vtl</button></a>
								</td>
								<td>
									<a href="\Signature\MENUISERIE\Volet Battant\Volet Battant 2Vtx.php?technicien=<?php echo $technicien?>&numero=<?php echo$numero?>&date=<?php echo$date?>&Nchantier=<?php echo$Nchantier?>&client=<?php echo$client?>&adresse=<?php echo$adresse?>&tel=<?php echo$tel?>&commercial=<?php echo$commercial?>&Nbrsmenuiserie=<?php echo$Nbrsmenuiserie?>&ral=<?php echo $ral ?>"><button class="button" type="button">Volet Battant 2 Vtx</button></a>
								</td>
							</tr>
						</table>
					</div>
				</td>
				<td width="50%">

				</td>
			</tr>
		</table>

	</body>

</html>







<script type="text/javascript">
	document.querySelector("#Coul").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table1')).display=='none'){
			document.querySelector("#table1").style.display="block";
		} else {
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#Frappe").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table3')).display=='none'){
			document.querySelector("#table3").style.display="block";
		} else {
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#Fixe").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='none'){
			document.querySelector("#table3-1").style.display="block";
		} else {
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#FoF").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='none'){
			document.querySelector("#table3-2").style.display="block";
		} else {
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#Portes").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='none'){
			document.querySelector("#table3-3").style.display="block";
		} else {
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}

	}
</script>
<script type="text/javascript">
	document.querySelector("#Galandage").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table4')).display=='none'){
			document.querySelector("#table4").style.display="block";
		} else {
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#GardeCorps").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table5')).display=='none'){
			document.querySelector("#table5").style.display="block";
		} else {
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#Hublot").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table6')).display=='none'){
			document.querySelector("#table6").style.display="block";
		} else {
			document.querySelector("#table6").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#Jalousie").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table7')).display=='none'){
			document.querySelector("#table7").style.display="block";
		} else {
			document.querySelector("#table7").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#VB").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table8')).display=='none'){
			document.querySelector("#table8").style.display="block";
		} else {
			document.querySelector("#table8").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
	}
</script>
<script type="text/javascript">
	document.querySelector("#VR").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#table9')).display=='none'){
			document.querySelector("#table9").style.display="block";
		} else {
			document.querySelector("#table9").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table1')).display=='block'){
			document.querySelector("#table1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3')).display=='block'){
			document.querySelector("#table3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table4')).display=='block'){
			document.querySelector("#table4").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-1')).display=='block'){
			document.querySelector("#table3-1").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-2')).display=='block'){
			document.querySelector("#table3-2").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table3-3')).display=='block'){
			document.querySelector("#table3-3").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table5')).display=='block'){
			document.querySelector("#table5").style.display="none";
		}
		if (window.getComputedStyle(document.querySelector('#table8')).display=='block'){
			document.querySelector("#table8").style.display="none";
		}
	}
</script>