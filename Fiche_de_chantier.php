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
	<table width="100%" border="1">
		<form>
			<tr>
				<td valign="top" align="center" width="50%">
					<table border="0" width="100%">
						<tr>
							<td	align="center"><image  width="100%" src="C:\wamp64\www\Prise de cote\images\LOGO-SIGNATURE-ALU-OK-8X4.jpg"></image></td>
						</tr>
						<tr>
							<td style="text-align:center; border-collapse:collapse; border: 2px #000000 solid; border-radius:20px;">
								<p> 115 Allée de Montaignac <br> 97427 L'Etang-Salé <br> Tel. : 0262 433924 <br> Email : contact@signature-alu.com <br> siret:828 716 00010-APE 2512 B</p>
							</td>
						</tr>
					</table>
				</td>
				<td width="50%"	>
					<table width="100%" border="0" align="center" style=" border: 2px #000000 solid; border-radius:20px; padding: 50px">
						<tr>
							<td colspan=3 >
								<p align="center" style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px "><font face="Arial" color="white"><b>Fiche de chantier</b></p></font>
							</td>
						</tr>
						<tr>
							<td width="40%"></td>
							<td colspan=2>
								<p > N° : <input required type="text" name="numero"></p>
							</td>
						</tr>
						<tr>
							<td>
							    <p><label for="date"><B>Date :  <?php echo $_GET['date'] ?></b></label>
							</td>
							<td> 
								<p> N° de Chantier : <input  required type="number" name="numeros_chantier"></p>
							</td>
							<td></td>
						</tr>
						<tr>
							<td colspan=3>
								<p >Client : <input width="100%" type="text" name="client" value="<?php echo $_GET['client'] ?>"></p>
							</td>
						</tr>
						<tr>
							<td colspan=3>
								<p>Adresse du chantier :
								<textarea name="adresse" row=4 cols=40></textarea></p>
							</td>
						</tr>
						<tr>
							<td colspan=3>
								<p>Tel : <input type="tel" name="tel"></p>
							</td>
						</tr>
						<tr>
							<td width="50%">
								<p>Commercial: <input type="text" name="commercial" value="<?php echo $_GET['commercial'] ?>"></p>
							</td>
							<td width="50%">
								<p>Technicien: <input type="text" name="technicien"></p>
							</td>
							<td></td>
						</tr>
						<tr>
							<td width="50%">
								<p>Nbrs de menuiserie : <input type="number" name="nbrs"></p>
							</td>
							<td width="50%">
								<p>RAL: <input type="text" name="ral" value="<?php echo $_GET['ral'] ?>"></p>
							</td>
							<td></td>
						</tr>
					</table>
				</td>
			</tr>
	</table>
	<table border="0" width="100%" style=" border: 2px #000000 solid; border-radius:20px;padding: 50px">
		<tr>
			<td colspan=4 width="25%"></td>
			<td colspan=2 width="50%" align="center">
				<p style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px ">
					<font face="Arial" color="white"><b>Renseignements Divers</p></font>
			</td>
			<td colspan=4 width="25%">
				<p>RAL : <input type="text" name="ral"></p>
			</td>
		</tr>
		<tr style="padding-botom: 25px">
			<td colspan=10 style="padding-botom: 25px">
				<p style="padding-botom: 25px"> Trait de niveau - Linteau : <input type="text" name="linteau"> / <input type="text" name="linteau"> / <input type="text" name="linteau"></p>
				<p style="margin-botom: 25px"> Trait de niveau - Sol Fini : <input type="text" name="sol_fini"> / <input type="text" name="linteau"> / <input type="text" name="linteau"></p>
			</td>
		</tr>
		<tr>
			<td colspan=2 style="border: 2px #000000 solid; border-radius:20px;"> 
				<p style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px; text-align:center">
					<font face="Arial" color="white"><b>Elecricité</font>
				</p>
				<p style="text-align:center"><input type="checkbox">Oui<input type="checkbox">Non</p>
			</td>
			
			<td colspan=4 style="border: 2px #000000 solid; border-radius:20px;"> 
				<p style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px; text-align:center">
					<font face="Arial" color="white"><b>Enduit Intérieur</font>
				</p>
				<p style="text-align:center">Trad./Plâtre <input type="checkbox">Fait<input type="checkbox">A faire</p>
				<p style="text-align:center">Plâco <input type="checkbox">Fait<input type="checkbox">A faire</p>
			</td>
			
			<td colspan=4 style="border: 2px #000000 solid; border-radius:20px;"> 
				<p style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px; text-align:center">
					<font face="Arial" color="white"><b>Enduit Extérieur</font>
				</p>
				<p style="text-align:center">Trad./Proj. <input type="checkbox">Fait<input type="checkbox">A faire</p>
				<p style="text-align:center">Bardage <input type="checkbox">Fait<input type="checkbox">A faire</p>
			</td>
		</tr>
		<tr>
			<td></td>
			<td colspan=3 style="border: 2px #000000 solid; border-radius:20px;">
				<p style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px; text-align:center">
					<font face="Arial" color="white"><b>Dépose</font>
				</p>
				<p style="text-align:center"><input type="checkbox">Oui<input type="checkbox">Non</p>
				<p style="text-align:center"><input type="checkbox">Client<input type="checkbox">Install Alu</p>
			</td>
			<td></td>
			<td colspan=4 style="border: 2px #000000 solid; border-radius:20px;">
				<p style="background:red; border-radius:7px; margin-left:50px; margin-right:50px; padding-top: 15px; padding-bottom:15px; text-align:center">
					<font face="Arial" color="white"><b>Etanchéité (Etoilage) Tableau</font>
				</p>
				<p style="text-align:center"><input type="checkbox">Fait<input type="checkbox">A faire</p><br /><br />
			</td>
			<td></td>
		</tr>
	</table>
	<table border="0" width="100%">
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td colspan=10 style="border: 2px #000000 solid; border-radius:20px">
				<p style="background:red; border-radius:7px; margin-left:450px; margin-right:450px; padding-top: 15px; padding-bottom:15px; text-align:center">
					<font face="Arial" color="white"><b>A Renseigner par le client</font>
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;1 </b></font>&nbsp; Présence inpérative du trait de niveau fourni par le Gros Oeuvre, ainsi que le renseignement pour la hauteur sol fini..................................<input type="checkbox">
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;2 </b></font>&nbsp; Etanchéité des tableaux effectuer inpérativement avant la pose des menuiseries..................................<input type="checkbox">
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;3 </b></font>&nbsp; Suite à la prise de mesure aucune modification (changement sens d'ouvertures, trait de niveau, dimensions...) ne pourra être effectué..................................<input type="checkbox">
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;4 </b></font>&nbsp; Au-delà d'un délai de un mois après la date prévisionnelle de pose, le client s'engage à régler le solde de la fourniture (Hors Pose)..................................<input type="checkbox">
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;5 </b></font>&nbsp; Le client doit être présent lors de la récepetion de pose des menuiseries..................................<input type="checkbox">
				</p>
				<p>
					<font face="Arial" style="background:red; border-radius:25px; color:white"><b>&nbsp;6 </b></font>&nbsp; Le solde du chantier vous seras demandé à la réception avec le poseur. Merci de préciser le moyent de paiement
				</p>
				<p align="center">
					<input type="checkbox">Virement bancaire (Délai Bancaire)<input type="checkbox">Chèque<input type="checkbox">Espèces
				</p>
			</td>
		</tr>
		<tr>
			<td colspan=4 style="border: 2px #000000 solid; border-radius:25px">
				<p align="center">Signature du client</p><br /><br /><br />
				
			</td>
			<td colspan=2></td>
			<td colspan=4 style="border: 2px #000000 solid; border-radius:20px">
				<p align="center">Signature Technicien</p><br /><br /><br />
			</td>
		</tr>
	</table>
</form>
</body>
<footer>
		
	<div class="noImpr">
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="file:///C:/Prise%20de%20cote/Menuiserie/Schéma de repérage.html">Suivant</a></button></p>
	</div>
	</form>
</footer>