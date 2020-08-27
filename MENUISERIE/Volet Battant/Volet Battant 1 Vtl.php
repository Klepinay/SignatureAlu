<!DOCTYPE html>
<html>

	<head>
		<title>Volet Battant 1 Vtl</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" href="style.css">
		<style media="print" type="text/css"> 
			.noImpr {
				display:none;
			} 
		</style>
	</head>
	
	<body>
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
                        <h1>Volet Battant 1 Vtl</h1>
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
		
		</table>
	
			<table width="100%" border="0" style="border-collapse: collapse">
					<tr align="center" style="height:50px">
						<td colspan=3>
							<p style="font-size:26px"><b><input type="checkbox" style="width:25px; height:25px"> Fenêtre</b></p>
						</td>

						<td colspan=3>
							<p style="font-size:26px"><b><input type="checkbox" style="width:25px; height:25px"> Porte</b></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> VB </i></b></span></div>
						</td>
						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Dormant </i></b></span></div>
						</td>
					</tr>
					<tr>
						<td colspan=2 align="right">
							<canvas id="canvas1" width="100" height="150" style="border: 1px #000000 solid"></canvas>
						</td>
						<td></td>
						<td colspan=3 style="border-left: 2px #000000 solid;">
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="peripherique">&nbsp; <label for="peripherique">Dormant Périphérique</label>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="seuil">&nbsp; <label for="seuil">Dormant avec Seuil</label>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="deportee">&nbsp; <label for="deportee">Fixation Déportée</label>
						</td>
					</tr>
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px;margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Volet Projetant </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplissage </i></b></span></div> 
						 </td> 
					 </tr> 
					<tr>
					<td align="right" width="21%">
					</td>
					<td width="8%" align="center">
						<img src="C:\Prise de cote\images\2019-12-30 14_03_14-Microsoft Excel (Échec de l’activation du produit) - VB 1 Vtl.xlsx  [Mode protég.png">
					</td>
					<td  width="21%">
						<span style="float:left;"><input type="checkbox" style="width:17px;height:17px; align:left" ></span>
					</td>
					<td width="50%" colspan=3 style="border-left: 2px #000000 solid;">
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="vertical">&nbsp;<label for="vertical"> Lame 120 Verticale</label> </p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="horizontal">&nbsp;<label for="horizontale"> Lame 120 Horizontale</label> </p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="Persienne Fixe Fermé">&nbsp;<label for="Persienne Fixe Fermé"> Persienne Fixe Fermé</label> </p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="Persienne Orientable">&nbsp;<label for="Persienne Orientable"> Persienne Orientable</label> </p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="Persienne Fixe Aéré">&nbsp;<label for="Persienne Fixe Aéré"> Persienne Fixe Aéré</label> </p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="Lame Elipse">&nbsp;<label for="Lame Elipse"> Lame Elipse</label> </p>
							
					</td>
				</tr>
					<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px; margin-top: 20px; margin-bottom: 20px;"><span style="background:#D9D9D9;"><b><i> Fermeture </i></b></span></div>
						</td>
						<td colspan=3 style="border-left: 2px #000000 solid;">
							<div style="text-align:center; font-size: 24px;margin-top: 20px; margin-bottom: 20px;"><span style="background:#D9D9D9;"><b><i> Ouverture Vue int </i></b></span></div>
						</td>
					</tr>
					<tr >
						<td colspan=3>
							<p style="margin-left:250px">	<input type="checkbox" style="width:20px; height:20px" id="cremone">&nbsp;<label for="cremone"><label for="cremone">Crémone</label></p>
							<p style="margin-left:250px">	<input type="checkbox" style="width:20px; height:20px" id="1pt">&nbsp;<label for="1pt">Sérrure 1Pt</label></p>							
							<p style="margin-left:250px">	<input type="checkbox" style="width:20px; height:20px" id="3pts">&nbsp;<label for="3pts">Serrure 3Pts</label></p>							
							<p style="margin-left:250px">	<input type="checkbox" style="width:20px; height:20px" id="Compas Stafer Pour Projection">&nbsp;<label for="Compas Stafer Pour Projection">Compas Stafer Pour Projection</label></p>							
							<p style="margin-left:250px">	<input type="checkbox" style="width:20px; height:20px" id="gaz">&nbsp;<label for="gaz">Verrin à gaz</label></p>							

								
						</td>
						<td colspan=3  style="border-left: 2px #000000 solid;">
							<p align="center"><img src="C:\Prise de cote\images\Ouverture.png" ></p>
							<p><input type="checkbox" style="width: 20px; height:20px; margin-left: 210px;" id="gauche"><label for="gauche">Poignée Gauche</label>&nbsp;&nbsp; <input id="droite"  type="checkbox" style="width: 20px; height:20px; margin-left: 100px"><label for="droite">Poignée Droite</label></p>
						</td>
					</tr>
					<tr height="25px"></tr>
					
					
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Hauteur Manoeuvre </i></b></span></div>
							<br /><input type="checkbox" style="width: 20px; height: 20px; margin-left:250px;" id="allege">&nbsp;<label for="allege">Ht Allège</label>
							<br /><input type="checkbox" style="width: 20px; height: 20px; margin-left:250px;" id="standard">&nbsp;<label for="standard">Ht Standard (fenêtre 350 porte 950)</label>
							<br /><input type="checkbox" style="width: 20px; height: 20px; margin-left:250px;" id="autre">&nbsp;<label for="autre">Autre Ht : </label><input type="number">&nbsp;</label>
						</td>
						<td colspan=3 >
						</td>						
					</tr>
				</table>
					
	<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top:350px;">
			<tr align="center" style="border-top: 2px #000000 solid;">
				<td style="border-top: 2px #000000 solid;">
					<p><label>Hauteur Point de Niveau / Linteau :</label><input type="number">&nbsp; </p>
				</td style="border-top: 2px #000000 solid;">
				<td></td>
				<td colspan=3 style="border-top: 2px #000000 solid;">						
					<p><label>Hauteur Point de Niveau / Sol Fini :</label><input type="number">&nbsp; </p>
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
		<p align="center"><a href="Vb1_pdf.php">save</a></button></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>
	</form>
</html>
	
<script>
	var e = document.getElementById("canvas1");
	var etx = e.getContext("2d");
	etx.moveTo(0, 75);
	etx.lineTo(100, 0);
	etx.stroke();
	
	var e = document.getElementById("canvas1");
	var etx = e.getContext("2d");
	etx.moveTo(0, 75);
	etx.lineTo(100, 150);
	etx.stroke();
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