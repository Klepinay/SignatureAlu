<!DOCTYPE html>
<html>
	<head>
		<title>Jalousie</title>
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
						<h1>Jalousie</h1>
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
						 <td colspan=3> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Nbre de Division </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Coté Manoeuvre </i></b></span></div> 
						 </td> 
					 </tr> 
					 <tr > 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  name="1division" value="checked" style="width: 20px; height:20px" id="1division">&nbsp;<label for="1division"> 1 Division </label></p>
						 </td> 
						 <td colspan=3 style="border-left: 2px #000000 solid;" align="center"> 
							 <p><input type="checkbox"  style="width: 20px; height:20px" id="sans traverse">&nbsp; <label for="droite">Droite</label></p> 
						 </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="2division">&nbsp; <label for="2division">2 Division</label>
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;" align="center"> 
							 <p><input type="checkbox"  style="width: 20px; height:20px" id="qte1">&nbsp;<label for="milieu"> Milieu  </label></p> 
						 </td> 
					 </tr> 
					 <tr > 
						<td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="3division">&nbsp; <label for="3Division">3 Division</p> 
						</td> 

						<td colspan=3 style="border-left: 2px #000000 solid;" align="center"> 
							<p><input type="checkbox"  style="width: 20px; height:20px" id="gauche">&nbsp;<label for="gauche"> Gauche </label></p>
						</td> 
					 </tr> 
					 <tr align="center"> 
						 <td colspan=3 > 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
					</tr> 
					 <tr> 
						 <td colspan=3> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Couvre Joint </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:40px"><span style="background:#D9D9D9;"><b><i> Mode d'Ouverture </i></b></span></div> 
						 </td> 
					 </tr> 
					 <tr > 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="27">&nbsp;<label for="27mm"> 27 mm </label>  <input type="checkbox" style="margin-left: 50px; width: 20px; height: 20px" id="droit">&nbsp;<label for="droit"> Droit </label></p> 
						 </td> 
						 <td colspan=3 style="border-left: 2px #000000 solid;" > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="sans traverse">&nbsp; <label for="cremone">Crémone</label></p> 
						 </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="50">&nbsp; <label for="50">50 mm</label>
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;" > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="treuil">&nbsp;<label for="treuil">Treuil Manivelle</p> 
						 </td> 
					 </tr> 
					 <tr > 
						 <td colspan=3 > 
							 <p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="scj">&nbsp; <label for="scj">Sans Couvre Joint</p> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;" > 
							<p style="margin-left:244px"><input type="checkbox"  style="width: 20px; height:20px" id="Moteur">&nbsp;<label for="Moteur"> Moteur</p>  </td> 
					 </tr> 
 
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px;margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Position C.J </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Remplisage </i></b></span></div> 
						 </td> 
					 </tr> 
					<tr>
						<td align="right" width="21%">
							<input type="checkbox" style="width: 17px; height: 17px;">
						</td>
						<td width="8%">
							<p align="center"><input type="Checkbox" style="width:17px;height:17px;"></p>
							<canvas id="canvas1" width="100" height="100" style="border: 1px #000000 solid"></canvas>
							<p align="center"><input type="checkbox" style="width: 17px; height: 17px;"></p>
						</td>
						<td  width="21%" align="center">
							<span><input type="checkbox" style="width: 20px; height:20px; margin-left:15px" id="int">&nbsp; <label for="int">INT</label><br/><input type="checkbox" style="width: 20px; height:20px;" id="ext">&nbsp; <label for="ext">EXT</label></span>
							<span style="float:left"><input type="Checkbox" style="width:17px;height:17px; align:left" ></span>
						</td>
						<td width="50%" colspan=3 align="center" style="border-left: 2px #000000 solid;">
							<p><input type="text" ></p>
						</td>
					</tr>
					 <tr> 
						 <td colspan=3 > 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Bavette </i></b></span></div> 
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							 <div style="text-align:center;">Remplissage si différentes lames </div> 
						 </td> 
					 </tr> 
					 <tr> 
						 <td colspan=3 align="center"> 
							 <p><input type="checkbox" style="width: 20px; height:20px;" id="30"> <label for="30">30 mm</label><br /><br /> 
							 <p><input type="checkbox" style="width: 20px; height:20px;" id="70"> <label for="70">70 mm</label><br /><br />  
						 </td> 

						 <td colspan=3 style="border-left: 2px #000000 solid;"> 
							<p align="center"><input type="text" ></p>
							<p align="center" style="margin-top: 40px"><input type="text" ></p>
						</td> 
					 </tr> 
					 <tr> 
						 <td colspan=6 > 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Hauteur Manoeuvre </i></b></span></div> 
						 </td>
					</tr> 
					 <tr>
						<td colspan=6>
							<p style="margin-left:300px"><input type="checkbox" style="width: 20px; height:20px" id="1lame"> <label for="1lame" style="margin-right:250px">1ere Lame</label><input type="checkbox" style="width: 20px; height:20px" id="6lame"> <label for="6lame" style="margin-right:250px">6eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="11lame"> <label for="11lame" style="margin-right:100px">11eme Lame</label></p>
							<p style="margin-left:300px"><input type="checkbox" style="width: 20px; height:20px" id="2lame"> <label for="2lame" style="margin-right:250px">2eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="7lame"> <label for="7lame" style="margin-right:250px">7eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="12lame"> <label for="12lame" style="margin-right:100px">12eme Lame</label></p>
							<p style="margin-left:300px"><input type="checkbox" style="width: 20px; height:20px" id="3lame"> <label for="3lame" style="margin-right:250px">3eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="8lame"> <label for="8lame" style="margin-right:250px">8eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="13lame"> <label for="13lame" style="margin-right:100px">13eme Lame</label></p>
							<p style="margin-left:300px"><input type="checkbox" style="width: 20px; height:20px" id="4lame"> <label for="4lame" style="margin-right:250px">4eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="9lame"> <label for="9lame" style="margin-right:250px">9eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="14lame"> <label for="14lame" style="margin-right:100px">14eme Lame</label></p>
							<p style="margin-left:300px"><input type="checkbox" style="width: 20px; height:20px" id="5lame"> <label for="5lame" style="margin-right:250px">5eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="10lame"> <label for="10lame" style="margin-right:250px">10eme Lame</label><input type="checkbox" style="width: 20px; height:20px" id="15lame"> <label for="15lame" style="margin-right:100px">15eme Lame</label></p>
						</td>
					</tr> 
					 <tr> 
						 <td colspan=6 > 
							 <div style="text-align:center; font-size: 24px; margin-bottom: 20px; margin-top:20px"><span style="background:#D9D9D9;"><b><i> Quantitatif de Lame </i></b></span></div> 
						 </td>
					</tr> 
					<tr align="center">
						<td >
							<div class="rectangle4">
								<p>H</p>
							</div>
							<div class="rectangle4">
								<p>Qté</p>
							</div>
						</td>
						<td width="17%">
							<div class="rectangle4">
								<p>H</p>
							</div>
							<div class="rectangle4">
								<p>Qté</p>
							</div>
						</td>
						<td width="17%">
							<div class="rectangle4">
								<p>H</p>
							</div>
							<div class="rectangle4">
								<p>Qté</p>
							</div>
						</td>
						<td width="17%">
							<div class="rectangle4">
								<p>H</p>
							</div>
							<div class="rectangle4">
								<p>Qté</p>
							</div>
						</td>
						<td width="17%">
							<div class="rectangle4">
								<p>H</p>
							</div>
							<div class="rectangle4">
								<p>Qté</p>
							</div>
						</td>
						<td width="17%">
						</td>
					</tr>
					<tr height="25px"></tr>
					<tr>
						<td>
							<p>
								<span style="margin-left:5px; margin-right:30px">215</span>
								<span><b>1</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">365</span>
								<span><b>2</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">515</span>
								<span><b>3</b></span>
							</p>
						</td>
						<td>
							<p>
								<span style="margin-left:5px; margin-right:30px">665</span>
								<span><b>4</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">815</span>
								<span><b>5</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">965</span>
								<span><b>6</b></span>
							</p>
						</td>
						<td>
							<p>
								<span style="margin-left:5px; margin-right:30px">1115</span>
								<span><b>7</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">1265</span>
								<span><b>8</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">1415</span>
								<span><b>9</b></span>
							</p>
						</td>
						<td>
							<p>
								<span style="margin-left:5px; margin-right:30px">1565</span>
								<span><b>10</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">1715</span>
								<span><b>11</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">1865</span>
								<span><b>12</b></span>
							</p>
						</td>
						<td>
							<p>
								<span style="margin-left:5px; margin-right:30px">2015</span>
								<span><b>13</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">2165</span>
								<span><b>14</b></span>
							</p>
							<p>
								<span style="margin-left:5px; margin-right:30px">2315</span>
								<span><b>15</b></span>
							</p>						
						</td>
						<td></td>
					</tr>
					
				</table>
				

		<footer>
		<table border="0" width="100%" style="border-collapse: collapse; margin-top:100px;">
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
		<p align="center"><a href="Jalousiepdf.php">save</a></button></p>	
		<p align="center"><button><a href="/Signature/nouvelle_prise_de_cote.php?technicien=<?php echo $_GET['technicien'] ?>&numero=<?php echo $_GET['numero'] ?>&date=<?php echo $_GET['date'] ?>&Nchantier=<?php echo $_GET['Nchantier'] ?>&client=<?php echo $_GET['client'] ?>&adresse=<?php echo $_GET['adresse'] ?>&tel=<?php echo $_GET['tel'] ?>&commercial=<?php echo $_GET['commercial'] ?>&Nbrsmenuiserie=<?php echo $_GET['Nbrsmenuiserie'] ?>&ral=<?php echo $_GET['ral'] ?>">Nouvelle Prise de Cote</a></button></p>
	</div>

	</form>

<script>
var d = document.getElementById("canvas1");
var dtx = d.getContext("2d");
dtx.strokeStyle='black';
dtx.moveTo(0, 25);
dtx.lineTo(100, 25);
dtx.stroke();
var d = document.getElementById("canvas1");
var dtx = d.getContext("2d");
dtx.strokeStyle='black';
dtx.moveTo(0, 50);
dtx.lineTo(100, 50);
dtx.stroke();
var d = document.getElementById("canvas1");
var dtx = d.getContext("2d");
dtx.strokeStyle='black';
dtx.moveTo(0, 75);
dtx.lineTo(100, 75);
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