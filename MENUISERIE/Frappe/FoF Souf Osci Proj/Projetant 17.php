<!Doctype html>
<html>
	<head>
		<title>Projetant 17</title>
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
						<h1>Chassis à Projection</h1>
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
					<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Couvre Joint </i></b></span></div>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Barreaudage </i></b></span></div>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="27">&nbsp;<label for="27">27 mm</label><input type="checkbox" style="width: 20px; height:20px; margin-left: 50px" id="Droit">&nbsp;<label for="Droit">Droit</label></p>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="sansbarreaux">&nbsp;<label for="sansbarreaux">Sans Barreaux</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="50">&nbsp;<label for="50">50 mm</label></p>  
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="barhor">&nbsp;<label for="barhor">Barreaux Horizontal</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="SCJ">&nbsp;<label for="SCJ">Sans Couvre Joint</label></p>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="barver">&nbsp;<label for="barver">Barreaux vertical</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							
						</td>
					</tr>
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px;margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Position C.J </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplissage </i></b></span></div> 
						 </td> 
					 </tr> 
				<tr>
					<td align="right" width="21%">
						<input type="checkbox" style="width: 17px; height: 17px;">
					</td>
					<td width="8%">
						<p align="center"><input type="Checkbox" style="width:17px;height:17px;"></p>
						<canvas id="canvas2" width="100" height="150" style="border: 1px #000000 solid"></canvas>
						<p align="center"><input type="checkbox" style="width: 17px; height: 17px;"></p>
					</td>
					<td  width="21%" align="center">
						<span><input type="checkbox" style="width: 20px; height:20px; margin-left:15px" id="int">&nbsp;<label for="int">INT</label><br/><input type="checkbox" style="width: 20px; height:20px;" id="ext">&nbsp;<label for="ext">EXT</label></span>
						<span style="float:left"><input type="Checkbox" style="width:17px;height:17px; align:left" ></span>
					</td>
					<td width="50%" colspan=3 align="center" style="border-left: 2px #000000 solid;">
						<p><input type="number">&nbsp;</p>
					</td>
				</tr>
					<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Bavette </i></b></span></div>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Type de Fermeture </b></i></span></div>
						</td>
					</tr>
					<tr >
						<td colspan=3>
							<p align="center"><input type="checkbox" style="width: 20px; height:20px;" id="30">&nbsp;<label for="30">30 mm</label><br /><br />
							   <input type="checkbox" style="width: 20px; height:20px;" id="70">&nbsp;<label for="70">70 mm</label></p>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="PP">&nbsp;<label for="PP">Poignée Pivotante</label></p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="CM">&nbsp;<label for="CM">COMPAS DE MARCOS</label></p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="PV">&nbsp;<label for="PV">Projection à Verrin</label></p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="PT">&nbsp;<label for="PT">Poignée de tirage</label></p>
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="MS">&nbsp;<label for="MS">Moteur Soufflet</label></p>
						</td>
					</tr>
					<tr>
						<td colspan=3 >
							<div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Hauteur Manoeuvre </i></b></span></div>
						</td>
						<td style="border-left: 2px #000000 solid;">
						</td>
						<td colspan=3>
						</td>
					</tr>
					<tr>
						<td colspan=3>
							<p style="margin-left:244px"><label>Ht Allège : </label><input type="number"></p>
						</td>
						<td>
						</td>
						<td colspan=3></td>
					</tr>
				</table>
					
				<script type="text/javascript" src="script.js"></script>
		<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top:550px;">
			<tr>
				<td align="right" style="border-top: 2px #000000 solid;">
					<span>&#8593;<br /><input type="number" style="width:25px;  margin-bottom:10px; margin-top: 10px"> Cm <br />&#8595;</span>
				</td>
				<td style="border-top: 2px #000000 solid;">
					<div class="rectangle3" >
						<p style="font-size:24px"><b>Cote Béton</b></p>
					</div><br /><br /><br /><br />
					<p style="margin-left:80px">&#8592; <input type="number" style="width:25px; margin-bottom:5px; margin-left:15px; margin-right:15px"> Cm &#8594;</p>
				</td>	
				<td colspan=3 style="border-top: 2px #000000 solid;">
					<label><b>Observation: <textarea name="observations" rows=4 cols=40></textarea></b></label>
				</td>
			</tr>
		</table>
	</footer>
	<div class="noImpr">
		<p align="center"><input type="button" value="Enregistrer" onClick="window.print()"></p>	
		<p align="center"><button><a href="file:///C:/Prise%20de%20cote/Home.html">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>
	
<script>
var c = document.getElementById("canvas2");
var ctx = c.getContext("2d");
ctx.moveTo(0, 0);
ctx.lineTo(50, 150);
ctx.stroke();

var d = document.getElementById("canvas2");
var dtx = d.getContext("2d");
dtx.moveTo(100, 0);
dtx.lineTo(50, 150);
dtx.stroke();

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
</html>
	
