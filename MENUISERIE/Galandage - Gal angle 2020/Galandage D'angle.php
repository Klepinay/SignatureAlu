<!Doctype html>
<html>
	<head>
		<title>Gal d'angle</title>
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
						<h1>Coulissant d'Angle</h1>
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

					<td colspan=2 align="center">
						<span style="font-size: 24px; margin-right:170px" ><input type="checkbox" style="width:20px; height:20px">Intérieur</span>
							Ou
						<span style="font-size: 24px; margin-left:170px" >Exterieur <input type="checkbox" style="width:20px; height:20px"></span>
					</td>
				</tr>
			</table>
			
<table width="100%" border="0" style="border-collapse: collapse ">
						<tr>
							<td align="center" colspan=3>
								<input type="checkbox" id="fenetre" name="fenetre" style="width: 20px; height: 20px"> <label for="fenetre" style="font-size: 25px"><b>Fenêtre</b></label>
							</td>
							<td align="center" colspan=3>
								<label for="porte" style="font-size: 25px"><b>Porte</b></label> <input type="checkbox" id="porte" name="porte" style="width: 20px; height: 20px; margin-left: 10px">
							</td>
						</tr>
						<tr height="30px">
							<td width="5%"></td>
							<td width="20%" style="border: 1px #CCCCCC solid; background-color: #D9D9D9;">
								<center><b><i>Hauteur Allège</i></b></center>
							</td>
							<td width="5%" style="border-right: 2px #000000 solid;"></td>
							
							<td width="5%"></td>
							<td width="20%" style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Rail Bas</i></b></center>
							</td>
							<td width="5%"></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td>

							</td>
							<td  style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td>
								<input type="checkbox" id="RE" name="RE" style="width: 17px; height: 17px"> <label>Rail Encastré (Découpe croisement)</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td align="center">
								<input type="text" id="hauteur allege">
							</td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td>
								<input type="checkbox" id="RPMR" name="RPMR" style="width: 17px; height: 17px"><label>Rail P M R</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td>
							</td>
							<td  style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td>
								<input type="checkbox" id="Carrelage" name="Carrelage" style="width: 17px; height: 17px"><label>Sur Carrelage</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<input type="checkbox" style="width: 17px; height: 17px"><label>PAS D'EVACUATION CHAMBRE BASSE</label>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td style="border-right: 2px #000000 solid;"></td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9;">
								<center><b><i>Traverse</i></b></center>
							</td>
							<td></td>
							
							<td></td>
							<td style="border: 1px #CCCCCC solid; background-color: #D9D9D9">
								<center><b><i>Modele</i></b></center>
							</td>
							<td></td>
							
						</tr>
						<tr height="30px">
							<td></td>
							<td></td>
							<td align="center"></td>
							
							<td></td>
							<td></td>
							<td></td>
							
						</tr>
						<tr height="100px">
							<td></td>
							<td align="center">
								<input type="checkbox" id="Qté1" name="Qté1" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 1</label>
									Axe: <input type="axe1" name="axe1" style="margin-top: 5px; margin-bottom: 5px"> <br>
								<input type="checkbox" id="Qté2" name="Qté2" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 2</label>
									Axe: <input type="axe2" name="axe2" style="margin-bottom: 5px"> <br>
								<input type="checkbox" id="Qté3" name="Qté3" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 3</label>
									Axe: <input type="axe3" name="axe3" style="margin-bottom: 5px"> <br>
								<input type="checkbox" id="Qté4" name="Qté4" style="width: 17px; height: 17px"><label style="margin-right: 5px;">Qté: 4</label>
									Axe: <input type="axe4" name="axe4" style="margin-bottom: 5px"> <br />
								<input type="checkbox" style="width: 17px; height:17px"><label> PAS DE TRAVERSE </label>
							
							</td>
							<td align="left">
							</td>
							
							<td></td>
							<td style="text-align: center;">
								<p><input type="checkbox" style="width: 17px; height:17px"><label>1 Vantail / 1 Rail</label></p>
								<p><input type="checkbox" style="width: 17px; height:17px"><label>2 Vantail / 2 Rail</label></p>
								<p><input type="checkbox" style="width: 17px; height:17px"><label>3 Vantail / 3 Rail</label></p>
								<p><input type="checkbox" style="width: 17px; height:17px"><label>4 Vantail / 4 Rail</label></p>
							</td>
							<td></td>				
						</tr>
						<tr height="30px">
							<td></td>
							<td colspan=2 style="padding-top: 25px">
								<label style="margin-left: 180px"> Largeur interieur</label><br />
								<input type="text" style="margin-left: 150px">
							</td>
							
							<td></td>
							<td ></td>
							<td></td>
							
						</tr>
						<tr>
							<td align="center">
								<label > Largeur interieur</label><br />
								<input type="text">
							</td>
							<td colspan=2 >
								<canvas id="canvas1" width="500" height="500" ></canvas>
							</td>
							<td></td>
							<td>
							
								<p>	<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Coulissant Principal</i></b></span></div></p>								
								<p align="center"><input type="checkbox" style="width: 17px; height:17px"><label> C1</label></p><br>
								<p style="margin-botoom: 25px" align="center"><input type="checkbox" style="width: 17px; height:17px"><label> C2</label></p>
								<p>	<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Epaisseur Mur</i></b></span></div></p>
								<p align="center"><input type="text"></p>
								<p style="margin-top: 45px"><label>Hauteur Béton : </label><input type="number"></p>
								<p align="center"><input type="checkbox" style="width: 17px; height:17px;"> +50 Haut</p>
								<p align="center"><input type="checkbox" style="width: 17px; height:17px;"> +50 Bas </p>
								<p><label>Hauteur Total : </label><input type="number"></p>
							</td>
							<td ></td>
						</tr>
						<tr>
							<td colspan=2 align="center">
								<p>	<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplissage</i></b></span></div></p>								
								<p><input type="text"></p>
								<p>	<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplissage Bas (si Traverse)</i></i></b></span></div></p>
								<p><input type="text"></p>
							</td>
							<td colspan=2 align="center">
								<p>	<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Position serrure (avec clé)</i></b></span></div></p>
								<p> <input type="checkbox" style="width: 17px; height: 17px"><label><b>C1</b> (vue extérieur)</label></p>
								<p> <input type="checkbox" style="width: 17px; height: 17px"><label><b>C2</b> (vue extérieur)</label></p>
								<p> <input type="checkbox" style="width: 17px; height: 17px"><label>Pas de Serrure</label></p>
							</td>
							<td colspan=2 align="center">
								<p>	<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Fermeture</i></b></span></div></p>
								<p> <input type="checkbox" style="width: 17px; height: 17px"><label>Simple</label></p>
								<p> <input type="checkbox" style="width: 17px; height: 17px"><label>Trianglerie 2 Pts</label></p>
								<p> <input type="checkbox" style="width: 17px; height: 17px"><label>Trianglerie 3 Pts</label></p>
							</td>
						</tr>

						
					</table>
				
<table border="0" width="100%" style="border-collapse: collapse; margin-top:50px;">
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
				
	<div class="noImpr">
		<p align="center"><p align="center"><a href="galan_pdf.php">save</a></button></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>

			<script>
				let canvas = document.getElementById('canvas1');
				let ctx = canvas.getContext('2d');
				ctx.font = '12px Verdana, Arial, serif';
				ctx.textAlign = 'center';
				ctx.fillText('C2', 225, 115);
				ctx.fillText('C1', 125, 225);
				
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(100,0);
				htx.lineTo(100, 50);
				htx.stroke();
				
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(350, 0);
				htx.lineTo(350, 50);
				htx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle= 'grey';
				btx.moveTo(350, 60);
				btx.lineTo(450, 60);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle= 'grey';
				btx.moveTo(350, 90);
				btx.lineTo(450, 90);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(350, 60);
				btx.lineTo(350, 90);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(450, 60);
				btx.lineTo(450, 90);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(70, 60);
				btx.lineTo(450, 60);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(100, 90);
				btx.lineTo(450, 90);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(70, 60);
				btx.lineTo(70, 450);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(100, 90);
				btx.lineTo(100, 450);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(70, 450);
				btx.lineTo(100, 450);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(70, 350);
				btx.lineTo(100, 350);
				btx.stroke();
				
				var b = document.getElementById("canvas1");
				var btx = b.getContext("2d");
				btx.fillStyle = 'grey';
				btx.moveTo(0, 350);
				btx.lineTo(60, 350);
				btx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.fillStyle = 'grey';
				htx.moveTo(0, 90);
				htx.lineTo(60, 90);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(450, 95);
				htx.lineTo(450, 115);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.fillStyle = 'grey';
				htx.moveTo(430, 95);
				htx.lineTo(450, 95);
				htx.stroke();
				
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.fillStyle = 'grey';
				htx.moveTo(430, 115);
				htx.lineTo(450, 115);
				htx.stroke();
				
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(430, 95);
				htx.lineTo(430, 115);
				htx.stroke();
				
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(440, 95);
				htx.lineTo(440, 115);
				htx.stroke();
				
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(430, 105);
				htx.lineTo(450, 105);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(105, 430);
				htx.lineTo(105, 450);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(125, 430);
				htx.lineTo(125, 450);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(105, 430);
				htx.lineTo(125, 430);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(105, 450);
				htx.lineTo(125, 450);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(105, 440);
				htx.lineTo(125, 440);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(115, 430);
				htx.lineTo(115, 450);
				htx.stroke();
				
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(450, 120);
				htx.lineTo(450, 140);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(350, 120);
				htx.lineTo(350, 140);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(355, 130);
				htx.lineTo(445, 130);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(355, 130);
				htx.lineTo(360, 125);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(355, 130);
				htx.lineTo(360, 135);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(440, 125);
				htx.lineTo(445, 130);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(445, 130);
				htx.lineTo(440, 135);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(135, 350);
				htx.lineTo(155, 350);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(135, 450);
				htx.lineTo(155, 450);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(145, 355);
				htx.lineTo(145, 445);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(145, 355);
				htx.lineTo(150, 360);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(140, 360);
				htx.lineTo(145, 355);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(140, 440);
				htx.lineTo(145, 445);
				htx.stroke();
	
				var h = document.getElementById("canvas1");
				var htx = h.getContext("2d");
				htx.moveTo(150, 440);
				htx.lineTo(145, 445);
				htx.stroke();
				

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
	
