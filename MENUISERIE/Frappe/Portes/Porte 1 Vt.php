<!Doctype html>
<html>
	<head>
		<title>Porte 1 Vt</title>
		<link rel="stylesheet" href="style.css">
		<style media="print" type="text/css"> 
			.noImpr {
				display:none;
			} 
		</style>
	</head>
	
	<body>
		<form>
			<table width="100%" border="0">
								<tr >
					<td>
						<div class="rectangle" >
							<label><i>Client<br /></i>
							<?php echo $_GET['client'] ?>
						</div>
					</td>
					<td>
						<div style="margin:10px; width:250px; border: 1px #000000 solid; height:50px; text-align:center; float: left">
							<label><i>Ral<br /></i></label>
								<?php echo $_GET['ral'] ?>
						</div>
					</td>
					<td >
						<div class="rectangle" >
							<p><label for="fld_986953_1"><B>Date : </b></label><br /></p>
							<?php echo $_GET['date'] ?>
						</div>
					</td>
					<td>
						<div class="rectangle">
							<label><i>Tech<br /></i><?php echo $_GET['technicien'] ?></label>
							
						</div>
					</td>
				</tr>
				<tr>
					<td colspan=4 align="center">
						<h1>Porte Ouvrante 1 Vt</h1>
					</td>
				</tr>
				<tr >
					<td>
						<div class="rectangle2" >
							<label><i><b>Rep<br /></b></i><input type="text" name="rep"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Qté<br /></b></i><input type="text" name="qte"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Lg<br /></b></i><input type="text" name="lg"></label>
						</div>
					</td>
					<td>
						<div class="rectangle2" >
							<label><i><b>Ht<br /></b></i><input type="text" name="ht"></label>
						</div>
					</td>
				</tr>
			</table>
				
				<table width="100%" border="0" style="border-collapse: collapse">
					<tr align="center" style="height:50px">
						<td colspan=3>
							<p style="font-size:26px"><b><input type="checkbox" style="width:25px; height:25px"> Française</b></p>
						</td>
						<td>
						</td>
						<td colspan=3>
							<p style="font-size:26px"><b><input type="checkbox" style="width:25px; height:25px"> Anglaise</b></p>
						</td>
					</tr>
										<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Couvre Joint </i></b></span></div>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Dormant </i></b></span></div>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="27">&nbsp;<label for="27">27 mm</label><input type="checkbox" style="width: 20px; height:20px; margin-left: 50px" id="Droit">&nbsp;<label for="Droit">Droit</label></p>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="4cotes">&nbsp;<label for="4cotes">4 Cotés</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="50">&nbsp;<label for="50">50 mm</label></p>  
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="3cotes+">&nbsp;<label for="3cotes+">3 cotés + seuil en Battue</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="SCJ">&nbsp;<label for="SCJ">Sans Couvre Joint</label></p>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="3cotes++">&nbsp;<label for="3cotes++">3 Cotés + seuil Plat 70mm</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="3cotessansseuil">&nbsp;<label for="3cotessansseuil">3 Cotés Sans Seuil</label></p>	
						</td>
					</tr>
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px;margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Position C.J </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Barreaudage </i></b></span></div> 
						 </td> 
					 </tr> 
					<tr>
					<td align="right" width="21%">
						<input type="checkbox" style="width: 17px; height: 17px;">
					</td>
					<td width="8%" align="center">
						<p><input type="Checkbox" style="width:17px;height:17px;"></p>
						<canvas id="canvas2" width="100" height="150" style="border: 1px #000000 solid"></canvas>
						<p><input type="checkbox" style="width: 17px; height: 17px;"></p>
					</td>
					<td  width="21%" valign="top">
						<p><span><input type="checkbox" style="width: 20px; height:20px;" id="int">&nbsp;<label for="int">INT</label><br/><input type="checkbox" style="width: 20px; height:20px;" id="ext">&nbsp;<label for="ext">EXT</label></span></p>
						<span style="float:left; margin-top: 45px"><input type="checkbox" style="width:17px;height:17px; align:left" ></span>
					</td>
					<td width="50%" colspan=3 style="border-left: 2px #000000 solid;">
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="sansbarreaux">&nbsp;<label for="sansbarreaux">Sans Barreaux</label></p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="hautbarreaude">&nbsp;<label for="hautbarreaude">Haut Barreaudé</label></p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="Barreaudehauteur">&nbsp;<label for="Barreaudehauteur">Barreaudé sur toute la hauteur</label></p>
					</td>
				</tr>
					<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Fermeture </i></b></span></div>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Traverse </i></b></span></div>
						</td>
					</tr>
					<tr >
						<td width="25%" >
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="cremone">&nbsp;<label for="cremone">Crémone</label></p>
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="serrure1">&nbsp;<label for="serrure1">Sérrure 1Pt</label></p>							
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="serrure3">&nbsp;<label for="serrure3">Serrure 3Pt</label></p>							
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="serrure1rouleau">&nbsp;<label for="serrure1rouleau">Serrure 1Pt à Rouleau</label></p>							
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="serrure3rouleau">&nbsp;<label for="serrure3rouleau">Serrure 3Pts à Rouleau</label> </p>							
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="fermeporte">&nbsp;<label for="fermeporte">Ferme Porte</label></p>						
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="PP">&nbsp;<label for="PP">Poignée Poussoir</label></p>							
							<p style="margin-left:165px">	<input type="checkbox" style="width:20px; height:20px" id="BatonAlu">&nbsp;<label for="BatonAlu">Bâton Alu Int+Ext</label></p>
								
						</td>
						<td width="10%"></td>
						<td >
							<p>	<input type="checkbox" style="width:20px; height:20px" id="AntiPanique1">&nbsp;<label for="AntiPanique1">Anti Panique 1Pt</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="AntiPanique3">&nbsp;<label for="AntiPanique3">Anti Paninque 3Pts</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="AntiPanique1serrure">&nbsp;<label for="AntiPanique1serrure">Anti Panique 1Pt+SerExt</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="AntiPanique3serrure">&nbsp;<label for="AntiPanique3serrure">Anti Panique 3Pt+Ser Ext</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="GE">&nbsp;<label for="GE">Gache Electrique</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="VM">&nbsp;<label for="VM">Ventouse Magnétique</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="bande3VM">&nbsp;<label for="bande3VM">Bde 3 Ventouses magnétique</label></p>
							<p>	<input type="checkbox" style="width:20px; height:20px" id="batonInox">&nbsp;<label for="batonInox">Bâton INOX Int+Ext</label></p>
						</td>

						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3 align="center">
							<p> <input type="checkbox" style="width:20px; height:20px" id="sanstraverse">&nbsp;<label for="sanstraverse">Sans Traverse</label></p>
							<p> <input type="checkbox" style="width:20px; height:20px" id="Qté1">&nbsp;<label for="Qté1">Qté : 1</label>&nbsp;&nbsp;<label>Axe : </label><input type="number"></p>
							<p> <input type="checkbox" style="width:20px; height:20px" id="Qté2">&nbsp;<label for="Qté2">Qté : 2</label>&nbsp;&nbsp;<label>Axe : </label><input type="number"></p>
							<p> <input type="checkbox" style="width:20px; height:20px" id="Qté3">&nbsp;<label for="Qté3">Qté : 3</label>&nbsp;&nbsp;<label>Axe : </label><input type="number"></p>
							<p> <input type="checkbox" style="width:20px; height:20px" id="Qté4">&nbsp;<label for="Qté4">Qté : 4</label>&nbsp;&nbsp;<label>Axe : </label><input type="number"></p>
						</td>
					</tr>
					<tr height="25px"></tr>
					
					<tr align="center">
						<td>
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Remplissage </i></b></span></div>
							<br /><input type="number">
						</td>
						<td padding="25px"></td>
						<td colspan=2>
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Panneau de Déco </i></b></span></div>
							<br /><input type="number">
						</td>
						<td></td>
						<td colspan=2>
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Remplissage Bas </i></b></span></div>
							<br /><input type="number">
						</td>						
					</tr>
					<tr height="25px"></tr>
					<tr align="center">
						<td >
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Française (vue int)  </i></b></span></div>
							<br /><img style="width: 100%;" src="C:\Prise de cote\images\2020-01-29 16_22_35-Microsoft Excel (Échec de l’activation du produit) - Porte  1 Vt.xlsx  [Mode pro.png">
							<p><input type="checkbox" style="width: 20px; height:20px;" id="OuvreGauche">&nbsp;<label for="OuvreGauche">Ouvrant Gauche</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="width: 20px; height:20px;" id="OuvreDroit">&nbsp;<label for="OuvreDroit">Ouvrant Droit</label></p>
						</td>
						<td padding="25px" ></td>
						<td colspan=2 >
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Hauteur Manoeuvre </i></b></span></div>
							<br /><input type="checkbox" style="width: 20px; height: 20px" id="Htstandard">&nbsp;<label for="Htstandard">Ht Standard</label>
							<br /><input type="checkbox" style="width: 20px; height: 20px" id="Autre">&nbsp;<label for="Autre">Autre</label> Ht : <input type="number">
						</td>
						<td ></td>
						<td colspan=2 >
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Anglaise (vue int) </i></b></span></div>
							<br /><img style="width: 60%;" src="C:\Prise de cote\images\2020-01-29 16_23_17-Microsoft Excel (Échec de l’activation du produit) - Porte  1 Vt.xlsx  [Mode pro.png">
							<p><input type="checkbox" style="width: 20px; height:20px;" id="OuvreGauche">&nbsp;<label for="OuvreGauche">Ouvrant Gauche</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" style="width: 20px; height:20px;" id="OuvreDroit">&nbsp;<label for="OuvreDroit">Ouvrant Droit</label></p>
						</td>						
					</tr>
				</table>
					
	<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top:25px;">
			<tr align="center" style="border-top: 2px #000000 solid;">
				<td style="border-top: 2px #000000 solid;">
					<p><label>Hauteur Point de Niveau / Linteau : </label><input type="number">&nbsp; </p>
				</td style="border-top: 2px #000000 solid;">
				<td></td>
				<td colspan=3 style="border-top: 2px #000000 solid;">						
					<p><label>Hauteur Point de Niveau / Sol Fini : </label><input type="number">&nbsp; </p>
				</td>
			</tr>
			<tr>
				<td align="right" >
					<span>&#8593;<br /><input type="number" style="width:25px;  margin-bottom:10px; margin-top: 10px"> Cm <br />&#8595;</span>
				</td>
				<td>
					<div class="rectangle3" >
						<p style="font-size:24px"><b>Cote Béton</b></p>
					</div><br /><br /><br /><br />
					<p style="margin-left:80px">&#8592; <input type="number" style="width:25px; margin-bottom:5px; margin-left:15px; margin-right:15px"> Cm &#8594;</p>
				</td>	
				<td colspan=3>
					<label><b>Observation: <textarea name="observations" rows=4 cols=40></textarea></b></label>
				</td>
			</tr>
		</table>
	</footer>
	<div class="noImpr">
		<p align="center"><a href="Porte1_pdf.php">save</a></button></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>
		
		<script>
			var c = document.getElementById("canvas2");
			var ctx = c.getContext("2d");
			ctx.moveTo(0, 0);
			ctx.lineTo(100, 75);
			ctx.stroke();
		</script>
		<script>
			var b = document.getElementById("canvas2");
			var btx = c.getContext("2d");
			btx.moveTo(0,150);
			btx.lineTo(100,75);
			btx.stroke();
		</script>
	<script type="text/javascript">
	document.querySelector("#couleurspe").onclick = function() {
		if (window.getComputedStyle(document.querySelector('#textecouleurspe')).display=='block'){
			document.querySelector("#textecouleurspe").style.display="none";
		} else {
			document.querySelector("#textecouleurspe").style.display="block";
		}
	}
</script>
	</body>
</html>
	
