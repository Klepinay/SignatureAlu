<!DOCTYPE html>
<html>
	<head>
		<title>Gal 3 Rail</title>
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
					<td colspan=2 align="center">
						<h1>Galandage 3 Rail</h1>
					</td>
					<td colspan=2 align="center">
						<span style="margin-right:150px" ><input type="checkbox"  id="fenetre" style="width:20px; height:20px"><label for="fenetre"> Fenêtre</label></span>
							Ou
						<span style="margin-left:150px" ><input type="checkbox" id="porte" style="width:20px; height:20px"><label for="porte"> Porte</label></span>
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
						<span style="margin-right:170px" ><input type="checkbox" id="vt" style="width:20px; height:20px"><label for="vt"> 3 Vt</label></span>
							Ou
						<span style="margin-left:170px" ><input id="vtx" type="checkbox" style="width:20px; height:20px"> <label for="vtx"> 6 Vtx</label></span>
					</td>
				</tr>
			</table>
				
				<table align="center" border="0" style="border-collapse: collapse" width="100%">
				
					<tr>
						<td colspan=4 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Pose N°1 </i></b></span></div>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Pose Int /Ext </i></b></span></div>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2 align="center">
							<canvas id="canvas1" width="200" height="100"></canvas>
						</td>
						<td colspan=2>
							<p><label>Largeur Béton : </label><input type="number">&nbsp;</p>
							<p><label>Hauteur Béton : </label><input type="number">&nbsp;</p>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4 align="center">
							<span style="margin-right:170px" ><input type="checkbox" id="int" style="width:20px; height:20px"><label for="int"> Int</label></span>
							Ou
							<span style="margin-left:170px" > <input type="checkbox" id="ext" style="width:20px; height:20px"><label for="ext"> EXT</label></span>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2>
						</td>
						<td colspan=2>
							<p><input type="checkbox" id="haut" style="width:20px; height:20px"><label for="haut"> +50 Haut</label></p>
							<p><input type="checkbox" id="bas" style="width:20px; height:20px"><label for="bas"> +50 Bas</label></p>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Rail Bas </i></b></span></div>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2>
							<label><b>Dégagement Maxi : </b><input type="number">&nbsp;</label>
						</td>
						<td colspan=2>
							<label><b>Hauteur total : </b><input type="number">&nbsp;</label>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="encastré" >&nbsp;<label for="encastré"> Rail Encastré (Découpe croisement)</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="pmr" >&nbsp;<label for="pmr"> Rail P M R</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="carrelage" >&nbsp;<label for="carrelage"> Sur Carrelage</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="evacuation" >&nbsp;<label for="evacuation"> PAS D'EVACUATION CHAMBRE BASSE</label></p>
							</td>
					</tr>
					
					<tr>
						<td colspan=4 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Pose N°2 </i></b></span></div>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Dégagement (vue int) </i></b></span></div>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2 align="center">
							<canvas id="canvas2" width="200" height="100"></canvas>
						</td>
						<td colspan=2>
							<p><label>Largeur Béton : </label><input type="number">&nbsp;</p>
							<p><label>Hauteur Béton : </label><input type="number">&nbsp;</p>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4 align="center">
							<canvas id="canvas3" width="500" height="100" ></canvas></br>
							<span style="margin-right:350px"><input type="checkbox" style="width:20px; height:20px" id="gauche"><label> Gauche</label></span><span><input type="checkbox" style="width:20px; height:20px" id="droite"><label for="droite">  Droite </label> </span>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2>
						</td>
						<td colspan=2>
							<p><input type="checkbox" id="haut" style="width:20px; height:20px"><label for="haut"> +50 Haut</label></p>
							<p><input type="checkbox" id="bas" style="width:20px; height:20px"><label for="bas"> +50 Bas</label></p>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Traverse </i></b></span></div>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2>
							<label><b>Dégagement Maxi : </b><input type="number">&nbsp;</label>
						</td>
						<td colspan=2>
							<label><b>Hauteur total : </b><input type="number">&nbsp;</label>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="qte"><label for="qte" style="margin-right: 30px">Qté : 1</label>  Axe :</p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="qte"><label for="qte" style="margin-right: 30px">Qté : 2</label>  Axe :</p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="qte"><label for="qte" style="margin-right: 30px">Qté : 3</label>  Axe :</p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="qte"><label for="qte" style="margin-right: 30px">Qté : 4</label>  Axe :</p>
						</td>
					</tr>
					
					<tr>
						<td colspan=4 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Pose N°3 </i></b></span></div>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplissage </i></b></span></div>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2 align="center">
							<canvas id="canvas4" width="200" height="100"></canvas>
						</td>
						<td colspan=2>
							<p><label>Largeur Béton : </label><input type="number">&nbsp;</p>
							<p><label>Hauteur Béton : </label><input type="number">&nbsp;</p>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4 align="center">
							<p><input type="number">&nbsp;</p>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;">
						<td colspan=2>
						</td>
						<td colspan=2>
							<p><input type="checkbox" id="haut" style="width:20px; height:20px"><label for="haut"> +50 Haut</label></p>
							<p><input type="checkbox" id="bas" style="width:20px; height:20px"><label for="bas"> +50 Bas</label></p>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px;"><span style="background:#D9D9D9;"><b><i> Remplissage Bas </i></b></span></div>
						</td>
					</tr>
					
					<tr style="margin-top: 25px;" align="center">
						<td colspan=2>
							<label><b>Dégagement Maxi : </b><input type="number">&nbsp;</label>
						</td>
						<td colspan=2>
							<label><b>Hauteur total : </b><input type="number">&nbsp;</label>
						</td>
						<td></td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=4>
							<p><input type="number">&nbsp;</p>
						</td>
					</tr>
					
					<tr  valign="top">
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Hauteur Manoeuvre </i></b></span></div>
							<br /><br /><input type="checkbox" style="width:20px; height:20px; margin-left:100px" id="autre">&nbsp;<label for="autre">Autre Ht : </label><input type="number">
							<br /><br /><input type="checkbox" style="width:20px; height:20px; margin-left:100px" id="standard">&nbsp;<label for="standard">Ht Standard (Fc 350-Pc 1020)</label>
							<br /><br /><input type="checkbox" style="width:20px; height:20px; margin-left:100px" id="autre">&nbsp;<label for="autre">Autre Ht : </label><input type="number">
						</td>
						<td colspan=4>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Serrure avec clés </i></b></span></div>
							<p><input type="checkbox" style="width:20px; height:20px" id="droite"><label for="droite">Droite (vue Ext)&nbsp;</label></p>
							<p><input type="checkbox" style="width:20px; height:20px" id="gauche"><label for="gauche">Gauche (vue Ext)&nbsp;</label></p>
						</td>

						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Fermeture </i></b></span></div>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="fermeture"><label for="fermeture" >&nbsp;Simple</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="fermeture"><label for="fermeture" >&nbsp;Tringlerie 2 Pts</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="fermeture"><label for="fermeture" >&nbsp;Tringlerie 3 Pts</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="fermeture"><label for="fermeture" >&nbsp;Fast Lock (Crémone)</label></p>
							<p style="margin-left:244px"><input type="checkbox" style="width:20px; height:20px" id="fermeture"><label for="fermeture" >&nbsp;Fast Block + Lock</label></p>
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
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>

		
		<script>
			var a = document.getElementById("canvas1");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(0, 0);
			atx.lineTo(50, 0);
			atx.stroke();
			
			var a = document.getElementById("canvas1");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(100, 0);
			atx.lineTo(200, 0);
			atx.stroke();			
			
			var b = document.getElementById("canvas1");
			var btx = b.getContext("2d");
			btx.lineWidth=2;
			btx.moveTo(50, 0);
			btx.lineTo(50, 15);
			btx.stroke();
			
			var c = document.getElementById("canvas1");
			var ctx = c.getContext("2d");
			ctx.lineWidth=2;
			ctx.moveTo(40, 0);
			ctx.lineTo(40, 15);
			ctx.stroke();
			
			var d = document.getElementById("canvas1");
			var dtx = d.getContext("2d");
			dtx.lineWidth=2;
			dtx.moveTo(40, 15);
			dtx.lineTo(50, 15);
			dtx.stroke();
			
			var e = document.getElementById("canvas1");
			var etx = e.getContext("2d");
			etx.lineWidth=2;
			etx.moveTo(160, 0);
			etx.lineTo(160, 15);			
			etx.stroke();
			
			var f = document.getElementById("canvas1");
			var ftx = f.getContext("2d");
			ftx.lineWidth=2;
			ftx.moveTo(170, 0);
			ftx.lineTo(170, 15);
			ftx.stroke();
			
			var g = document.getElementById("canvas1");
			var gtx = g.getContext("2d");
			gtx.lineWidth=2;
			gtx.moveTo(160, 15);
			gtx.lineTo(170, 15);
			gtx.stroke();
			
			var h = document.getElementById("canvas1");
			var htx = h.getContext("2d");
			htx.lineWidth=2;
			htx.moveTo(100, 30);
			htx.lineTo(100, 60);
			htx.stroke();
			
			var i = document.getElementById("canvas1");
			var itx = i.getContext("2d");
			itx.lineWidth=2;
			itx.moveTo(170, 30);
			itx.lineTo(170, 60);
			itx.stroke();
			
			var j = document.getElementById("canvas1");
			var jtx = j.getContext("2d");
			jtx.lineWidth=2;
			jtx.moveTo(110, 45);
			jtx.lineTo(160, 45);
			jtx.stroke();
			
			var k = document.getElementById("canvas1");
			var ktx = k.getContext("2d");
			ktx.lineWidth=2;
			ktx.moveTo(110, 45);			
			ktx.lineTo(115, 40);
			ktx.stroke();
			
			var l = document.getElementById("canvas1");
			var ltx = l.getContext("2d");
			ltx.lineWidth=2;
			ltx.moveTo(110, 45);
			ltx.lineTo(115, 50);
			ltx.stroke();
			
			var m = document.getElementById("canvas1");
			var mtx = m.getContext("2d");
			mtx.lineWidth=2;
			mtx.moveTo(155, 40);
			mtx.lineTo(160, 45);
			mtx.stroke();
			
			var n = document.getElementById("canvas1");
			var ntx = n.getContext("2d");
			ntx.lineWidth=2;
			ntx.moveTo(155, 50);
			ntx.lineTo(160, 45);
			ntx.stroke();
		</script>
		<script>
			var a = document.getElementById("canvas2");
			var atx = a.getContext("2d");
			atx.lineWidth=10;
			atx.moveTo(20, 0);
			atx.lineTo(20, 80);
			atx.stroke();
			
			var a = document.getElementById("canvas2");
			var atx = a.getContext("2d");
			atx.lineWidth=10;
			atx.moveTo(100, 0);
			atx.lineTo(200, 0);
			atx.stroke();
			
			
			var b = document.getElementById("canvas2");
			var btx = b.getContext("2d");
			btx.lineWidth=2;
			btx.moveTo(20, 10);
			btx.lineTo(30, 10);
			btx.stroke();
			
			var c = document.getElementById("canvas2");
			var ctx = c.getContext("2d");
			ctx.lineWidth=2;
			ctx.moveTo(30, 10);
			ctx.lineTo(30, 20);
			ctx.stroke();
			
			var d = document.getElementById("canvas2");
			var dtx = d.getContext("2d");
			dtx.lineWidth=2;
			dtx.moveTo(20, 20);
			dtx.lineTo(30, 20);
			dtx.stroke();
	
			var e = document.getElementById("canvas2");
			var etx = e.getContext("2d");
			etx.lineWidth=2;
			etx.moveTo(160, 0);
			etx.lineTo(160, 15);			
			etx.stroke();
			
			var f = document.getElementById("canvas2");
			var ftx = f.getContext("2d");
			ftx.lineWidth=2;
			ftx.moveTo(170, 0);
			ftx.lineTo(170, 15);
			ftx.stroke();
			
			var g = document.getElementById("canvas2");
			var gtx = g.getContext("2d");
			gtx.lineWidth=2;
			gtx.moveTo(160, 15);
			gtx.lineTo(170, 15);
			gtx.stroke();
			
			var h = document.getElementById("canvas2");
			var htx = h.getContext("2d");
			htx.lineWidth=2;
			htx.moveTo(100, 30);
			htx.lineTo(100, 60);
			htx.stroke();
			
			var i = document.getElementById("canvas2");
			var itx = i.getContext("2d");
			itx.lineWidth=2;
			itx.moveTo(170, 30);
			itx.lineTo(170, 60);
			itx.stroke();
			
			var j = document.getElementById("canvas2");
			var jtx = j.getContext("2d");
			jtx.lineWidth=2;
			jtx.moveTo(110, 45);
			jtx.lineTo(160, 45);
			jtx.stroke();
			
			var k = document.getElementById("canvas2");
			var ktx = k.getContext("2d");
			ktx.lineWidth=2;
			ktx.moveTo(110, 45);			
			ktx.lineTo(115, 40);
			ktx.stroke();
			
			var l = document.getElementById("canvas2");
			var ltx = l.getContext("2d");
			ltx.lineWidth=2;
			ltx.moveTo(110, 45);
			ltx.lineTo(115, 50);
			ltx.stroke();
			
			var m = document.getElementById("canvas2");
			var mtx = m.getContext("2d");
			mtx.lineWidth=2;
			mtx.moveTo(155, 40);
			mtx.lineTo(160, 45);
			mtx.stroke();
			
			var n = document.getElementById("canvas2");
			var ntx = n.getContext("2d");
			ntx.lineWidth=2;
			ntx.moveTo(155, 50);
			ntx.lineTo(160, 45);
			ntx.stroke();
		</script>
		<script>
			
			var a = document.getElementById("canvas3");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(0, 0);
			atx.lineTo(63, 0);
			atx.stroke();
			
			var a = document.getElementById("canvas3");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(126, 0);
			atx.lineTo(189, 0);
			atx.stroke();
			
			var a = document.getElementById("canvas3");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(311, 0);
			atx.lineTo(374, 0);
			atx.stroke();
			
			var a = document.getElementById("canvas3");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(437, 0);
			atx.lineTo(500, 0);
			atx.stroke();
			
			var b = document.getElementById("canvas3");
			var btx = b.getContext("2d");
			btx.lineWidth=5;
			btx.moveTo(30, 40);
			btx.lineTo(126, 40);
			btx.stroke();
			
			var b = document.getElementById("canvas3");
			var btx = b.getContext("2d");
			btx.lineWidth=5;
			btx.moveTo(374, 40);
			btx.lineTo(470, 40);
			btx.stroke();			
			
			var c = document.getElementById("canvas3");
			var ctx = c.getContext("2d");
			ctx.lineWidth=2;
			ctx.moveTo(30, 40);
			ctx.lineTo(40, 30);
			ctx.stroke();
			
			var c = document.getElementById("canvas3");
			var ctx = c.getContext("2d");
			ctx.lineWidth=2;
			ctx.moveTo(30, 40);
			ctx.lineTo(40, 50);
			ctx.stroke();
			
			var d = document.getElementById("canvas3");
			var dtx = d.getContext("2d");
			dtx.lineWidth=2;
			dtx.moveTo(460, 30);
			dtx.lineTo(470, 40);
			dtx.stroke();
			
			
			var b = document.getElementById("canvas3");
			var btx = b.getContext("2d");
			btx.lineWidth=2;
			btx.moveTo(460, 50);
			btx.lineTo(470, 40);
			btx.stroke();
		</script>
		<script>
			var a = document.getElementById("canvas4");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(0, 0);
			atx.lineTo(75, 0);
			atx.stroke();
			
			var a = document.getElementById("canvas4");
			var atx = a.getContext("2d");
			atx.lineWidth=20;
			atx.moveTo(125, 0);
			atx.lineTo(200, 0);
			atx.stroke();			
			
			var b = document.getElementById("canvas4");
			var btx = b.getContext("2d");
			btx.lineWidth=2;
			btx.moveTo(50, 0);
			btx.lineTo(50, 15);
			btx.stroke();
			
			var c = document.getElementById("canvas4");
			var ctx = c.getContext("2d");
			ctx.lineWidth=2;
			ctx.moveTo(40, 0);
			ctx.lineTo(40, 15);
			ctx.stroke();
			
			var d = document.getElementById("canvas4");
			var dtx = d.getContext("2d");
			dtx.lineWidth=2;
			dtx.moveTo(40, 15);
			dtx.lineTo(50, 15);
			dtx.stroke();
			
			var e = document.getElementById("canvas4");
			var etx = e.getContext("2d");
			etx.lineWidth=2;
			etx.moveTo(160, 0);
			etx.lineTo(160, 15);			
			etx.stroke();
			
			var f = document.getElementById("canvas4");
			var ftx = f.getContext("2d");
			ftx.lineWidth=2;
			ftx.moveTo(170, 0);
			ftx.lineTo(170, 15);
			ftx.stroke();
			
			var g = document.getElementById("canvas4");
			var gtx = g.getContext("2d");
			gtx.lineWidth=2;
			gtx.moveTo(160, 15);
			gtx.lineTo(170, 15);
			gtx.stroke();
			
			var h = document.getElementById("canvas4");
			var htx = h.getContext("2d");
			htx.lineWidth=2;
			htx.moveTo(125, 30);
			htx.lineTo(125, 60);
			htx.stroke();
			
			var i = document.getElementById("canvas4");
			var itx = i.getContext("2d");
			itx.lineWidth=2;
			itx.moveTo(170, 30);
			itx.lineTo(170, 60);
			itx.stroke();
			
			var j = document.getElementById("canvas4");
			var jtx = j.getContext("2d");
			jtx.lineWidth=2;
			jtx.moveTo(135, 45);
			jtx.lineTo(160, 45);
			jtx.stroke();
			
			var k = document.getElementById("canvas4");
			var ktx = k.getContext("2d");
			ktx.lineWidth=2;
			ktx.moveTo(135, 45);			
			ktx.lineTo(140, 40);
			ktx.stroke();
			
			var l = document.getElementById("canvas4");
			var ltx = l.getContext("2d");
			ltx.lineWidth=2;
			ltx.moveTo(135, 45);
			ltx.lineTo(140, 50);
			ltx.stroke();
			
			var m = document.getElementById("canvas4");
			var mtx = m.getContext("2d");
			mtx.lineWidth=2;
			mtx.moveTo(155, 40);
			mtx.lineTo(160, 45);
			mtx.stroke();
			
			var n = document.getElementById("canvas4");
			var ntx = n.getContext("2d");
			ntx.lineWidth=2;
			ntx.moveTo(155, 50);
			ntx.lineTo(160, 45);
			ntx.stroke();
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
	
